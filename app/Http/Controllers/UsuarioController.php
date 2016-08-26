<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Encuesta\User;
use Encuesta\Http\Requests;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::All();
        return view('usuario.list',compact('usuarios'));
    }

    public function create(){
    	return view('usuario.create');
    }

    public function store(Request $request){
    	User::create ([
    			'usuario' => $request['usuario'],
    			'nombre' => $request['name'],
    			'apellidos' => $request['apellidos'],
    			'email' => $request['correo'],
    			'password' => $request['password'],
    			'tipo' => $request['tipoUsuario'],
    		]);

    	return redirect()->to('usuario');
    }

    public function show(){

    }

    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    public function update($id, Request $request){
        $usuario = User::findOrFail($id);
        $usuario->update ([
                'usuario' => $request['usuario'],
                'nombre' => $request['name'],
                'apellidos' => $request['apellidos'],
                'email' => $request['correo'],
                'password' => $request['password'],
                'tipo' => $request['tipoUsuario'],
            ]);
        $usuario->save();

        return Redirect::to('usuario');
    }

    public function destroy($id){
        User::destroy($id);

        return Redirect::to('usuario');
    }
}
