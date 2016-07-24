<?php

namespace Encuesta\Http\Controllers;

use Illuminate\Http\Request;

use Encuesta\Http\Requests;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function administrador(){
    	return view('administrador');

    }

    public function encuesta(){
    	return view('encuesta');
    }

    public function usuario(){
    	return view('usuario');
    }

    public function encuestado(){
    	return view('encuestado');
    }

    public function pregunta(){
        return view('pregunta');
    }

    public function preferencia(){
        return view('preferencia');
    }

    public function perfil(){
        return view('perfil');
    }

}
