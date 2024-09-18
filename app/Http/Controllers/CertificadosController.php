<?php

namespace App\Http\Controllers;

use App\Models\Certificados;
use App\Http\Requests\StoreCertificadosRequest;
use App\Http\Requests\UpdateCertificadosRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CertificadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificados = Certificados::where('status', '=', true)->get();

        return view('pages.certificados.index', compact('certificados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $certificados = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.certificados.create', compact('certificados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $certificados = new Certificados();

        try {
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/certificados/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
                $this->saveImg($file, $routeImg, $nombreImagen);

                $certificados->url_image = $routeImg;
                $certificados->name_image = $nombreImagen;
            } else {
                $routeImg = 'images/img/';
                $nombreImagen = 'noimagenliquidacion.jpg';

                $certificados->url_image = $routeImg;
                $certificados->name_image = $nombreImagen;
            }

            if ($request->hasFile('archive')) {
                $file = $request->file('archive');
                $routeImg = 'storage/archives/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if (!file_exists($routeImg)) {
                    mkdir($routeImg, 0777, true);
                }

                $file->move($routeImg, $nombreImagen);

                $certificados->url_archive = $routeImg;
                $certificados->name_archive = $nombreImagen;
            }

            $certificados->title = $request->title;
            $certificados->description = $request->description;
            $certificados->save();

            return redirect()->route('certificados.index')->with('success', 'Certificado creado exitosamente.');
        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos'], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificados $certificados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificados $certificados, $id)
    {
        $certificados = Certificados::findOrfail($id);
        $categoria = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.certificados.edit', compact('certificados', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $certificados = Certificados::findOrfail($id);

        try {
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/certificados/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if ($certificados->url_image !== 'images/img/') {
                    File::delete($certificados->url_image . $certificados->name_image);
                }

                $this->saveImg($file, $routeImg, $nombreImagen);

                $certificados->url_image = $routeImg;

                $certificados->name_image = $nombreImagen;
            }

            if ($request->hasFile('archive')) {
                $file = $request->file('archive');
                $routeImg = 'storage/archives/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if (!file_exists($routeImg)) {
                    mkdir($routeImg, 0777, true);
                }

                $file->move($routeImg, $nombreImagen);

                $certificados->url_archive = $routeImg;
                $certificados->name_archive = $nombreImagen;
            }

            $certificados->title = $request->title;
            $certificados->description = $request->description;
            $certificados->update();

            return redirect()->route('certificados.index')->with('success', 'Certificados modificado exitosamente.');
        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos '], 400);
        }
    }



    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        // $img->coverDown(155, 208, 'center');
        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteCerticado(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;

        //Busco el servicio con id como parametro
        $service = Certificados::findOrfail($id);
        //Modifico el status a false
        $service->status = false;
        //Guardo
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Certificado eliminado.']);
    }


    public function updateVisible(Request $request)
    {
        $cantidad = $this->contarLiquidacionVisible();

        if ($cantidad >= 1000 && $request->status == 1) {
            return response()->json(['message' => 'Solo puedes hacer visible x Certificados'], 409);
        }

        $id = $request->id;
        $field = $request->field;
        $status = $request->status;
        $service = Certificados::findOrFail($id);
        $service->$field = $status;
        $service->save();

        $cantidad = $this->contarLiquidacionVisible();

        return response()->json(['message' => 'Certificado modificado', 'cantidad' => $cantidad]);
    }

    public function contarLiquidacionVisible()
    {
        $cantidad = Certificados::where('visible', '=', 1)->count();
        return $cantidad;
    }
}
