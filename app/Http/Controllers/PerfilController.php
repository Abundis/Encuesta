<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Encuesta\Cliente;
use Encuesta\Http\Requests;

class PerfilController extends Controller
{
    public function index(){
        $perfil = \Encuesta\Cliente::All();
        return view('perfil.list',compact('perfil'));
    }

    public function edit($id){
        $perfil = Cliente::findOrFail($id);
        return view('perfil.edit')->with([
                'perfil' => $perfil,
            ]);
       // return view('pregunta.edit', compact('pregunta'));
    }

    public function update($id, Request $request){
        $perfil = Cliente::findOrFail($id);
        $perfil->update ([
                'nombre' => $request['nombre'],
                'apellidos' => $request['apellidos'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'telefono' => $request['telefono'],
                'calleynum' => $request['calleynum'],
                'estado' => $request['estado'],
                'ciudad' => $request['ciudad'],
            ]);
        $perfil->save();

        return Redirect::to('perfil');
    }

    public function destroy($id){
        Cliente::destroy($id);

        return Redirect::to('/');
    }
}
