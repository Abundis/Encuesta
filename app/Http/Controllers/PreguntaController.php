<?php

namespace Encuesta\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Encuesta\Banco_Preguntas;
use Encuesta\Preferencias;
use Encuesta\Http\Requests;

class PreguntaController extends Controller
{
    public function index(){
        $preguntas = \Encuesta\Banco_Preguntas::
        join('Preferencias','Preferencias.id_preferencia','=','Banco-Preguntas.id_preferencia')->get();
        return view('pregunta.list')->with([
                'preguntas' => $preguntas,
            ]);
        //return view('pregunta.list',compact('preguntas'));
        
    }

    public function create(){
        $preferencias = Preferencias::All();
    	return view('pregunta.create')->with([
                'preferenciasP' => $preferencias,
            ]);
    }

    public function store(Request $request){
    	\Encuesta\Banco_Preguntas::create ([
    			'pregunta' => $request['pregunta'],
    			'id_preferencia' => $request['preferenciaPregunta'],
    			'tipo' => $request['tipoPregunta'],
    		]);

    	return redirect()->to('pregunta');
    }

    public function show(){

    }

    public function edit($id){
        $pregunta = Banco_Preguntas::findOrFail($id);
        $preferencias = Preferencias::All();
        return view('pregunta.edit')->with([
                'preferenciasP' => $preferencias,
                'pregunta' => $pregunta,
            ]);
       // return view('pregunta.edit', compact('pregunta'));
    }

    public function update($id, Request $request){
        $pregunta = Banco_Preguntas::findOrFail($id);
        $pregunta->update ([
                'pregunta' => $request['pregunta'],
                'id_preferencia' => $request['preferenciaPregunta'],
                'tipo' => $request['tipoPregunta'],
            ]);
        $pregunta->save();

        return Redirect::to('pregunta');
    }

    public function destroy($id){
        Banco_Preguntas::destroy($id);

        return Redirect::to('pregunta');
    }

    
}
