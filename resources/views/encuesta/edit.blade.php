<!DOCTYPE html>
<html>
    <head>
        <title>Panel Administrador</title>
        {!!Html::style('css/bootstrap.min.css')!!}
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <a class="navbar-brand" href="/administrador">Encuestas DOOD | Administrador</a>
                </div>
            </div>
        </nav></br></br></br></br>
            <div class="col-lg-2">
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="/preferencia"><font color="1a242f">Preferencias</font></a></li>
                  <li role="presentation"><a href="/pregunta"><font color="1a242f">Preguntas</font></a></li>
                  <li role="presentation" class="active"><a href="#"><font color="#FFF">Encuestas</font></a></li>
                  <li role="presentation"><a href="/usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation"><a href="/encuestado"><font color="1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
        <div class="col-lg-3">
                <ul>
            <table width="40%" border="0" cellspacing="0" cellpadding="10">
            {{ Form::open(['route' => ['encuesta.update', $encuesta->id_encuesta],  'method' => 'PUT']) }}
                <label>Preferencia</label><br>
                <select required name="preferenciaEncuesta">
                    <option></option>
                    @foreach($preferenciasE as $preferencia)
                    <option value={{$preferencia->id_preferencia}}>{{$preferencia->nombre}}</option>
                    @endforeach
                </select><br>
                <label>Titulo de la Encuesta</label><br>
                <input value="{{ $encuesta->nombre_encuesta }}" name="nameEncuesta" id="nameEncuesta" required type="text"/><br>
                <label>Descripción</label><br>
                <textarea value="{{ $encuesta->descripcion }}" name="descripcion" id="descripcion"></textarea><br>
                <label>Dinero de la encuesta</label><br>
                <input value="{{ $encuesta->dinero }}" type="number" name="dineroEncuesta" id="dinero" min="10" max="1000" step="10" required/><br/><br/>
                <label>Total de preguntas</label><br>
                <input value="{{ $encuesta->tot_preguntas }}" type="number" name="numPreguntas" id="preguntas" min="1" max="20" required/><br/><br/>
                {{ Form::submit ('Guardar') }}
            {{  Form::close() }}
            {{ Form::open(['route' => ['encuesta.destroy', $encuesta->id_encuesta],  'method' => 'DELETE']) }}
                    {!!Form::submit ('Eliminar')!!}
            {{ Form::close() }}
            </ul>
            </div>
        </table>
        
        <!-- jQuery -->
        {!!Html::script('js/jquery.js')!!}
        <!-- Bootstrap Core JavaScript -->
        {!!Html::script('js/bootstrap.min.js')!!}
        <!-- Plugin JavaScript -->
        {!!Html::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js')!!}
        {!!Html::script('js/classie.js')!!}
        <!-- Contact Form JavaScript -->
        {!!Html::script('js/jqBootstrapValidation.js')!!}
        {!!Html::script('js/contact_me.js')!!}
        <!-- Custom Theme JavaScript -->
        {!!Html::script('js/freelancer.js')!!}
    </body>
</html>
