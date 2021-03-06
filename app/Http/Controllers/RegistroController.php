<?php

namespace Encuesta\Http\Controllers;

use Illuminate\Http\Request;

use Encuesta\Http\Requests;

class RegistroController extends Controller
{
    public function index(){
    	return view('registro');
    }

    public function store(Request $request){
        \Encuesta\Cliente::create([
                'id_cliente' => $request['id_cliente'],
                'nombre' => $request['name'],
                'apellidos' => $request['apellidos'],
                'email' => $request['correo'],
                'password' => $request['password'],
                'telefono' => $request['telefono'],
                'genero' => $request['genero'],
                'calleynum' => $request['calleynum'],
                'estado' => $request['estado'],
                'ciudad' => $request['ciudad'],
            ]);
        return redirect()->to('/');
    }
}
