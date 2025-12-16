<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correos;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $anioSeleccionado = $request->get('anio', 2025); // valor por default
        $trimestreSeleccionado = $request->get('trimestre', 1);

        $articulos = [
            2024 => [
                4 => [
                    [ "titulo" => "¿Sabías que el Congreso mexiquense protege tu patrimonio?", "img" => "patrimonio/img/billete-1-ok-1.png", "ruta" => "/patrimonio" ],
                    [ "titulo" => "LXII Legislatura, Legislatura histórica de la Paridad y la inclusión", "img" => "paridad/img/billete-1-ok-1.png", "ruta" => "/paridad_inclusion" ],
                ],
            ],
            2025 => [
                1 => [
                    [ "titulo" => "Claves de la Reforma Judicial de Edomex", "img" => "reforma/img/billete-1-ok-1.png", "ruta" => "/reforma_judicial" ],
                    [ "titulo" => "Lo que debes de saber del Paquete Fiscal 2025", "img" => "https://c.animaapp.com/udhLWezT/img/billete-1-ok-1.png", "ruta" => "/paquete_fiscal" ],
                    [ "titulo" => "Las mujeres al frente del presupuesto 2025 en Estado de México", "img" => "mujeresp/img/billete-1-ok-1.png", "ruta" => "/mujeres_presupuesto" ],
                ],
                2 => [
                    [ "titulo" => "Combate LXII Legislatura mexiquense tala clandestina", "img" => "tala/img/billete-1-ok-1.png", "ruta" => "/tala_clandestina" ],
                    [ "titulo" => "Protege el Congreso Edomex una Maternidad libre", "img" => "maternidad/img/billete-1-ok-1.png", "ruta" => "/maternidad_libre" ],
                    [ "titulo" => "Impulsa LXII Legislatura derecho al ciudadano digno", "img" => "ciudadanodigno/img/billete-1-ok-1.png", "ruta" => "/derecho_al_ciudadano_digno" ],
                ],
                3 => [
                    [ "titulo" => "Dicen adiós a bolsas de plástico en Edomex", "img" => "plastico/img/imagen-entrada-1.png", "ruta" => "/plastico_edomex" ],
                    [ "titulo" => "El rock ya tiene su día en el calendario mexiquense", "img" => "https://cdn.prod.website-files.com/68d32cae5b7816fce0255ced/68d6d169fb9d7ca4ace1caff_billete-1-ok-1.png", "ruta" => "/rock_mexiquense" ],
                    [ "titulo" => "Blog del parlamento", "img" => "blogparlamento/images/parlamentos-1154-2025.jpeg", "ruta" => "/blog_del_parlamento" ],
                ],
            ]
        ];
        return view("pages.home", compact('anioSeleccionado', 'trimestreSeleccionado', 'articulos'));
    }
    public function rock_mexiquense()
    {
        return view("pages.rock");
    }
    public function reforma_judicial()
    {
        return view("pages.reformaJudicial");
    }
    public function paquete_fiscal()
    {
        return view("pages.paquetefiscal");
    }
    public function mujeres_presupuesto()
    {
        return view("pages.mujerespresupuesto");
    }
    public function tala_clandestina()
    {
        return view("pages.talaclandestina");
    }
    public function maternidad_libre()
    {
        return view("pages.maternidadlibre");
    }
    public function derecho_al_ciudadano_digno()
    {
        return view("pages.derechociudadano");
    }
    public function plastico_edomex()
    {
        return view("pages.plasticoedomex");
    }
    public function patrimonio()
    {
        return view("pages.patrimonio");
    }
    public function paridad_inclusion()
    {
        return view("pages.paridad");
    }
    public function blog_parlamento()
    {
        return view("pages.blogparlamento");
    }
    public function el_alfenique()
    {
        return view("pages.alfenique");
    }

    public function pinatas()
    {
        return view("pages.pinatas");
    }

    public function getArticulos($anio, $trimestre)
    {
//        dd($anio, $trimestre);
        $anioSeleccionado = $anio;
        $articulos = [
            2024 => [
                4 => [
                    [ "titulo" => "¿Sabías que el Congreso mexiquense protege tu patrimonio?", "img" => "patrimonio/img/billete-1-ok-1.png", "ruta" => "/patrimonio" ],
                    [ "titulo" => "LXII Legislatura, Legislatura histórica de la Paridad y la inclusión", "img" => "paridad/img/billete-1-ok-1.png", "ruta" => "/paridad_inclusion" ],
                ],
            ],
            2025 => [
                1 => [
                    [ "titulo" => "Claves de la Reforma Judicial de Edomex", "img" => "reforma/img/billete-1-ok-1.png", "ruta" => "/reforma_judicial" ],
                    [ "titulo" => "Lo que debes de saber del Paquete Fiscal 2025", "img" => "https://c.animaapp.com/udhLWezT/img/billete-1-ok-1.png", "ruta" => "/paquete_fiscal" ],
                    [ "titulo" => "Las mujeres al frente del presupuesto 2025 en Estado de México", "img" => "mujeresp/img/billete-1-ok-1.png", "ruta" => "/mujeres_presupuesto" ],
                ],
                2 => [
                    [ "titulo" => "Combate LXII Legislatura mexiquense tala clandestina", "img" => "tala/img/billete-1-ok-1.png", "ruta" => "/tala_clandestina" ],
                    [ "titulo" => "Protege el Congreso Edomex una Maternidad libre", "img" => "maternidad/img/billete-1-ok-1.png", "ruta" => "/maternidad_libre" ],
                    [ "titulo" => "Impulsa LXII Legislatura derecho al ciudadano digno", "img" => "ciudadanodigno/img/billete-1-ok-1.png", "ruta" => "/derecho_al_ciudadano_digno" ],
                ],
                3 => [
                    [ "titulo" => "Dicen adiós a bolsas de plástico en Edomex", "img" => "plastico/img/imagen-entrada-1.png", "ruta" => "/plastico_edomex" ],
                    [ "titulo" => "El rock ya tiene su día en el calendario mexiquense", "img" => "https://cdn.prod.website-files.com/68d32cae5b7816fce0255ced/68d6d169fb9d7ca4ace1caff_billete-1-ok-1.png", "ruta" => "/rock_mexiquense" ],
                    [ "titulo" => "Blog del parlamento", "img" => "blogparlamento/images/parlamentos-1154-2025.jpeg", "ruta" => "/blog_del_parlamento" ],
                ],
                4 => [
                    [ "titulo" => "El Congreso Mexiquense reconoce lo que el corazón ya sabía: el Alfeñique es ahora Patrimonio Cultural Inmaterial", "img" => "alfenique/images/alfeniqueportada.png", "ruta" => "/el_alfenique_patrimonio_cultural" ],
                ],
            ]
        ];
        return response()->json($articulos[$anio][$trimestre] ?? []);
    }


    public function guardarCorreo(Request $request)
    {
//        dd($request->correo);
        $request->validate([
            'correo' => 'required|email|max:255',
        ]);

        try {
            $correoExiste = Correos::where('email', $request->correo)->first();

            if ($correoExiste) {
                return response()->json([
                    'estatus' => 400,
                    'error' => 'Existe un registro con el correo',
                    'correo' => $request->correo
                ]);
            }

            $data = Correos::create([
                'email' => $request->correo,
            ]);

            return response()->json([
                'msg' => 'Correo guardado',
                'estatus' => 200
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'error' => 'Ocurrió un error al guardar el correo'
            ], 500);
        }
    }
}
