<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\Specifications;
use App\Models\ClientLogos;
use App\Models\Service;
use App\Models\AboutUs;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $general = General::all()->first();
        $servicios = Service::where('status', 1)->where('visible', 1)->get();
        $logos = ClientLogos::where('status', '=', 1)->get();

        return view('public.index', compact('general', 'logos', 'servicios'));
    }

    public function nosotros()
    {

        $general = General::all()->first();
        $nosotros = AboutUs::all()->first();
        return view('public.nosotros', compact('general', 'nosotros'));
    }

    public function gestion($id)
    {
        $general = General::all()->first();
        $servicioById = Service::where('id', '=', $id)->first();
        $servicios = Service::where('status', 1)->where('visible', 1)->get();
        return view('public.gestion', compact('general', 'servicios', 'servicioById', 'id'));
    }

    public function agradecimiento()
    {$general = General::all()->first();
        return view('public.agradecimiento', compact('general'));
    }

    public function contacto()
    {
        $general = General::all()->first();
        $servicios = Service::where('status', 1)->where('visible', 1)->get();
        return view('public.contacto', compact('general', 'servicios'));
    }

    public function micuenta()
    {
        $user = Auth::user();
        return view('public.dashboard', compact('user'));
    }

    //  --------------------------------------------
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        $data = $request->all();
        $data['full_name'] = $request->full_name;

        try {
            $reglasValidacion = [
                /* 'name' => 'required|string|max:255', */
                'email' => 'required|email|max:255',
                /* 'phone' => 'required|string|max:99999999999', */
            ];
            $mensajes = [
                'full_name.required' => 'El campo nombre es obligatorio.',
                'email.required' => 'El campo correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico no es válido.',
                'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
                'phone.required' => 'El campo teléfono es obligatorio.',
                'phone.integer' => 'El campo teléfono debe ser un número entero.',
            ];
            $request->validate($reglasValidacion, $mensajes);
            $formlanding = Message::create($data);
            $this->envioCorreo($formlanding);
            $this->envioCorreoInterno($formlanding);

            return response()->json(['message' => 'Mensaje enviado con exito']);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->validator->errors()], 400);
        }
    }

    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);

        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }

    private function envioCorreo($data)
    {
        $name = $data['full_name'];
        $mensaje = 'Gracias por comunicarte con Decotab';
        $mail = EmailConfig::config($name, $mensaje);
        // dd($mail);
        try {
            $mail->addAddress($data['email']);
            $mail->Body = 'Hola, ' . $name . '. Bienvenido a nuestro sitio web.';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    private function envioCorreoInterno($data)
    {
        $name = $data['full_name'];
        $mensaje = 'Tellego un nuevo mensaje';
        $mail = EmailConfig::config($name, $mensaje);
        $emailCliente = General::all()->first();
        // dd($mail);
        try {
            $mail->addAddress($emailCliente->email);
            $mail->Body = 'Hola, jordan tienes un nuevo mensaje de: ' . $name . '';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}