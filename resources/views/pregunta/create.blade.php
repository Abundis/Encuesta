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
                  <li role="presentation" class="active"><a href="/pregunta"><font color="#FFF">Preguntas</font></a></li>
                  <li role="presentation"><a href="/encuesta"><font color="#1a242f">Encuestas</font></a></li>
                  <li role="presentation"><a href="/usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation"><a href="/encuestado"><font color="1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="#1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
            <div class="col-lg-3">
                <ul>
            {!! Form::open(array('route' => 'pregunta.store')) !!}
                {!!csrf_field()!!}
                <label>Preferencia</label><br>
                <select required name="preferenciaPregunta">
                    <option></option>
                    @foreach($preferenciasP as $preferencia)
                    <option value={{$preferencia->id_preferencia}}>{{$preferencia->nombre}}</option>
                    @endforeach
                </select><br>

                <label>Titulo de la Pregunta</label><br>
                <input name="pregunta" id="pregunta" required type="text" placeholder="Titulo"/><br>
                <label>Tipo de Pregunta</label><br>
                <select required name="tipoPregunta">
                    <option></option>
                    <option value="Unica">Unica</option>
                    <option value="Escala">Escala</option>
                    <option value="Multiple">Multiple</option>
                </select></br></br>
                <button type="submit" id="btnAgregarPregunta"name="btnAgregarPregunta">Agregar Pregunta</button>
            </form>
            </ul>
            </div>
        </table>
            {!! Form::close() !!}
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