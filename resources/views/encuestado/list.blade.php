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
                  <li role="presentation"><a href="pregunta"><font color="1a242f">Preguntas</font></a></li>
                  <li role="presentation"><a href="encuesta"><font color="#1a242f">Encuestas</font></a></li>
                  <li role="presentation"><a href="usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation" class="active"><a href="encuestado"><font color="#FFF">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="#1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
        <table width="260%" border="0" cellspacing="0" cellpadding="10">
            <tr>
                <td><label>Usuario</label></td>
                <td><label>Dinero</label></td> 
                <td><label>Nombre</label></td> 
                <td><label>Apellidos</label></td>
                <td><label>Email</label></td>
                <td><label>Password</label></td>
                <td><label>Telefono</label></td>
                <td><label>Genero</label></td>
                <td><label>Direccion</label></td>
                <td><label>Ciudad</label></td>
                <td><label>Estado</label></td>
              </tr>
              @foreach ($encuestados as $encuestado)
              <tr>
                <td>{{$encuestado->id_cliente}}</td>
                <td>{{$encuestado->dinero}}</td>
                <td>{{$encuestado->nombre}}</td>
                <td>{{$encuestado->apellidos}}</td>
                <td>{{$encuestado->email}}</td>
                <td>{{$encuestado->password}}</td>
                <td>{{$encuestado->telefono}}</td>
                <td>{{$encuestado->genero}}</td>
                <td>{{$encuestado->calleynum}}</td>
                <td>{{$encuestado->ciudad}}</td>
                <td>{{$encuestado->estado}}</td>
              </tr>
              @endforeach
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
