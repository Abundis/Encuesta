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
                  <li role="presentation"><a href="/preferencia"><font color="1a242f">Preferencias</font></a></li>
                  <li role="presentation"><a href="/pregunta"><font color="1a242f">Preguntas</font></a></li>
                  <li role="presentation" class="active"><a href="#"><font color="#FFF">Encuestas</font></a></li>
                  <li role="presentation"><a href="/usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation"><a href="/encuestado"><font color="1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
            <div class="col-lg-5">
            <table width="150%" cellspacing="0" cellpadding="2">
              <tr>
                <td><label>Titulo</label></td>
                <td><label>Preferencia</label></td> 
                <td><label>Descripcion</label></td>
                <td><label>Dinero</label></td>
                <td><label>Total de preguntas</label></td>
                <td><label>Operaciones</label></td>
              </tr>
              @foreach ($encuestas as $encuesta)
              <tr>
                <td>{{$encuesta->nombre_encuesta}}</td>
                <td>{{$encuesta->id_preferencia}}</td>
                <td>{{$encuesta->descripcion}}</td>
                <td>{{$encuesta->dinero}}</td>
                <td>{{$encuesta->tot_preguntas}}</td>
                <td>
                  <a href="{{ route('encuesta.edit', $encuesta->id_encuesta) }}">Editar o Eliminar</a>
                </td>
              </tr>
              @endforeach
              <div aling="right">{!! link_to_route('encuesta.create', $title = 'Agregar', $parameters = array(), $attributes = ['class' => 'btn btn-info']) !!}</div>
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
