<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Encuesta\Preferencias;
use Illuminate\Http\Request;
use Encuesta\Http\Requests;

class PreferenciaController extends Controller
{
    public function index(){
        $preferencias = \Encuesta\Preferencias::All();
        return view('preferencia.list',compact('preferencias'));
    }

    public function create(){
    	return view('preferencia.create');
    }

    public function store(Request $request){

    	Preferencias::create ([
    			'nombre' => $request['namePreferencia'],
    			'descripcion' => $request['descripcion'],
    		]);

    	return redirect()->to('preferencia');
    }

    public function show(){

    }

    public function edit($id){
        $preferencia = \Encuesta\Preferencias::findOrFail($id);
        return view('preferencia.edit', compact('preferencia'));
    }

    public function update($id, Request $request){
        $preferencia = Preferencias::findOrFail($id);
        $preferencia->update ([
                'nombre' => $request['namePreferencia'],
                'descripcion' => $request['descripcion'],
            ]);
        $preferencia->save();

        return Redirect::to('preferencia');
    }

    public function destroy($id){
        Preferencias::destroy($id);

        return Redirect::to('preferencia');
    }

}
