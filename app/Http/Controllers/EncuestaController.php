<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use App\Encuesta;
use Encuesta\Preferencias;
use Illuminate\Http\Request;

use Encuesta\Http\Requests;

class EncuestaController extends Controller
{
    public function index(){
        $encuestas = \Encuesta\Encuesta::
        join('Preferencias','Preferencias.id_preferencia','=','Encuestas.id_preferencia')->get();
        return view('encuesta.list',compact('encuestas'));
    }

    public function create(){
    	$preferencias = Preferencias::All();
        return view('encuesta.create')->with([
                'preferenciasE' => $preferencias,
            ]);
    }

    public function store(Request $request){
    	\Encuesta\Encuesta::create ([
    			'usuario' => '123',
    			'id_preferencia' => $request['preferenciaEncuesta'],
    			'nombre_encuesta' => $request['nameEncuesta'],
                'descripcion' => $request['descripcion'],
    			'dinero' => $request['dineroEncuesta'],
    			'tot_preguntas' => $request['numPreguntas'],
    			'url' => 'qwe',
    		]);

    	return redirect()->to('encuesta');
    }

    public function show(){

    }

    public function edit($id){
        $encuestas = \Encuesta\Encuesta::findOrFail($id);
        $preferencias = Preferencias::All();
        return view('encuesta.edit')->with([
                'preferenciasE' => $preferencias,
                'encuesta' => $encuestas,
            ]);
    }

    public function update($id,Request $request){
        $encuesta = \Encuesta\Encuesta::findOrFail($id);
        $encuesta->update([
                'usuario' => '123',
                'id_preferencia' => $request['preferenciaEncuesta'],
                'nombre_encuesta' => $request['nameEncuesta'],
                'descripcion' => $request['descripcion'],
                'dinero' => $request['dineroEncuesta'],
                'tot_preguntas' => $request['numPreguntas'],
                'url' => 'qwe',
            ]);

        $encuesta->save();

        return Redirect::to('encuesta');
    }

    public function destroy($id){
        \Encuesta\Encuesta::destroy($id);

        return Redirect::to('encuesta');
    }
}