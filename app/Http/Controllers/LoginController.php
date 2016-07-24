<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Encuesta\Http\Requests\LoginRequest;
use Encuesta\Http\Requests;

class LoginController extends Controller
{
    public function store(LoginRequest $request){
    	if(Auth::attempt(['email'=> $request['email'], 'password' => $request['contraseña']])){
    		return Redirect::to('administrador');
    	}
    	return Redirect::to('/');
    }
}
