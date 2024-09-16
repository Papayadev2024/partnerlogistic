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
        $nosotros = AboutUs::where('status','=', 1)->get();
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

    public function obtenerProvincia($departmentId)
    {
      $provinces = DB::select('select * from provinces where active = ? and department_id = ? order by description', [1, $departmentId]);
      return response()->json($provinces);
    }
  
    public function obtenerDistritos($provinceId)
    {
      $distritos = DB::select('select * from districts where active = ? and province_id = ? order by description', [1, $provinceId]);
      return response()->json($distritos);
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
                'phone' => 'required|string|max:99999999999',
            ];
            $mensajes = [
                'email.required' => 'El campo correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico no es válido.',
                'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
                'phone.required' => 'El campo teléfono es obligatorio.',
                'phone.integer' => 'El campo teléfono debe ser un número entero.',
            ];
            $request->validate($reglasValidacion, $mensajes);
            $formlanding = Message::create($data);
            $this->envioCorreoAdmin($formlanding);
            $this->envioCorreoCliente($formlanding);

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

    public function librodereclamaciones()
    {
      $departamentofiltro = DB::select('select * from departments where active = ? order by 2', [1]);
  
      return view('public.librodereclamaciones', compact('departamentofiltro'));
    }

    
    private function envioCorreoAdmin($data)
    {   
        $emailadmin = General::first();
        
        $name = "Administrador";
        $mensaje = "tienes un nuevo mensaje - Partners Logistics Perú";
        $mail = EmailConfig::config($name, $mensaje);
        $emailadmin = "diego.martinez.r@tecsup.edu.pe";
        $baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/mail';
        $baseUrllink = 'https://' . $_SERVER['HTTP_HOST'] . '/';
        try {
            $mail->addAddress($emailadmin);
            $mail->Body =
                '
                <html lang="en">
                <head>
                  <meta charset="UTF-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                  <title>Credito Mype Credito</title>
                  <link rel="preconnect" href="https://fonts.googleapis.com" />
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                  <link
                    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                    rel="stylesheet"
                  />
                  <style>
                    @import url(https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap);
                    * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box;
                    }
                    body {
                      font-family: Montserrat, sans-serif;
                    }
                  </style>
                </head>
                <body>
                  <main>
                    <table
                      style="
                        width: 600px;
                        margin: 0 auto;
                        text-align: center;
                        background-image: url(' . $baseUrl . '/fondo.png);
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                      "
                    >
                      <thead>
                        <tr>
                          <th
                            style="
                              display: flex;
                              flex-direction: row;
                              justify-content: center;
                              align-items: center;
                              margin: 20px auto;
                              padding: 0 200px;
                              text-align:center;
                            "
                          >
                            <a href="'. $baseUrllink . '" target="_blank" style="text-align:center" ><img src="' . $baseUrl . '/logo.png" alt="creditomype" /></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p
                              style="
                                color: #0D3244;
                                font-size: 40px;
                                line-height: 60px;
                                font-family: Montserrat, sans-serif;
                                font-weight: bold;
                              "
                            >
                              ¡Nuevo
                              <span style="color: #0D3244">mensaje!</span>
                            </p>
                          </td>
                        </tr>          
                        <tr>
                          <td>
                            <p
                              style="
                                color: #0D3244;
                                font-weight: 500;
                                font-size: 18px;
                                text-align: center;
                                width: 500px;
                                margin: 0 auto;
                                padding: 30px 0;
                                font-family: Montserrat, sans-serif;
                              "
                            >
                              Hola ' . $name . '<br>
                              Tienes un nuevo mensaje en tu bandeja.
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a
                              target="_blank"
                              href="'. $baseUrllink . '"
                              style="
                                text-decoration: none;
                                background-color: #FF7B29;
                                color: white;
                                padding: 16px 20px;
                                display: inline-flex;
                                justify-content: center;
                                border-radius: 10px;
                                align-items: center;
                                gap: 10px;
                                font-weight: 600;
                                font-family: Montserrat, sans-serif;
                                font-size: 16px;
                                margin-bottom: 350px;
                              "
                            >
                              <span>Visita nuestra web</span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </main>
                </body>
              </html>
              
';

            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    private function envioCorreoCliente($data)
    {
        $name = $data['full_name'];
        $mensaje = "Gracias por comunicarte con Partners Logistics Perú";
        $mail = EmailConfig::config($name, $mensaje);
        $baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/mail';
        $baseUrllink = 'https://' . $_SERVER['HTTP_HOST'] . '/';

        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '
                <html lang="en">
                <head>
                  <meta charset="UTF-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                  <title>Credito Mype Credito</title>
                  <link rel="preconnect" href="https://fonts.googleapis.com" />
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                  <link
                    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                    rel="stylesheet"
                  />
                  <style>
                    @import url(https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap);
                    * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box;
                    }
                    body {
                      font-family: Montserrat, sans-serif;
                    }
                  </style>
                </head>
                <body>
                  <main>
                    <table
                      style="
                        width: 600px;
                        margin: 0 auto;
                        text-align: center;
                        background-image: url(' . $baseUrl . '/fondo.png);
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                      "
                    >
                      <thead>
                        <tr>
                          <th
                            style="
                              display: flex;
                              flex-direction: row;
                              justify-content: center;
                              align-items: center;
                              margin: 20px auto;
                              padding: 0 200px;
                              text-align:center;
                            "
                          >
                            <a href="'. $baseUrllink . '" target="_blank" style="text-align:center" ><img src="' . $baseUrl . '/logo.png" alt="creditomype" /></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p
                              style="
                                color: #0D3244;
                                font-size: 40px;
                                line-height: 60px;
                                font-family: Montserrat, sans-serif;
                                font-weight: bold;
                              "
                            >
                              ¡Gracias
                              <span style="color: #0D3244">por escribirnos!</span>
                            </p>
                          </td>
                        </tr>          
                        <tr>
                          <td>
                            <p
                              style="
                                color: #0D3244;
                                font-weight: 500;
                                font-size: 18px;
                                text-align: center;
                                width: 500px;
                                margin: 0 auto;
                                padding: 30px 0;
                                font-family: Montserrat, sans-serif;
                              "
                            >
                              Hola ' . $name . '<br>
                              En breve estaremos comunicandonos contigo.
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a
                              target="_blank"
                              href="'. $baseUrllink . '"
                              style="
                                text-decoration: none;
                                background-color: #FF7B29;
                                color: white;
                                padding: 16px 20px;
                                display: inline-flex;
                                justify-content: center;
                                border-radius: 10px;
                                align-items: center;
                                gap: 10px;
                                font-weight: 600;
                                font-family: Montserrat, sans-serif;
                                font-size: 16px;
                                margin-bottom: 350px;
                              "
                            >
                              <span>Visita nuestra web</span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                         <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </main>
                </body>
              </html>
              ';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


}