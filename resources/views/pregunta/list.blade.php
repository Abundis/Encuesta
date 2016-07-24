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
                    <a class="navbar-brand" href="administrador">Encuestas DOOD | Administrador</a>
                </div>
            </div>
        </nav></br></br></br></br>
            <div class="col-lg-2">
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="preferencia"><font color="1a242f">Preferencias</font></a></li>
                  <li role="presentation" class="active"><a href="pregunta"><font color="#FFF">Preguntas</font></a></li>
                  <li role="presentation"><a href="encuesta"><font color="1a242f">Encuestas</font></a></li>
                  <li role="presentation"><a href="usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation"><a href="encuestado"><font color="1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </ul>
            </div>
            <div class="col-lg-4">
            <table width="100%" cellspacing="0" cellpadding="2">
              <tr>
                <td><label>Titulo de Pregunta</label></td>
                <td><label>Preferencia</label></td> 
                <td><label>Tipo</label></td>
                <td><label>Operaciones</label></td>
              </tr>
              @foreach ($preguntas as $pregunta)
              <tr>
                <td>{{$pregunta->pregunta}}</td>
                <td>{{$pregunta->id_preferencia}}</td>
                <td>{{$pregunta->tipo}}</td>
                <td>
                  <a href="{{ route('pregunta.edit', $pregunta->id_pregunta) }}">Editar o Eliminar</a>
                </td>
              </tr>
              @endforeach
              {!! link_to_route('pregunta.create', $title = 'Agregar', $parameters = array(), $attributes = ['class' => 'btn btn-info']) !!}
            </table>
        </div>
        
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