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
                  <li role="presentation"><a href="/encuesta"><font color="#1a242f">Encuestas</font></a></li>
                  <li role="presentation" class="active"><a href="/usuario"><font color="#FFF">Usuarios</font></a></li>
                  <li role="presentation"><a href="/encuestado"><font color="#1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="#1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul>
            <table width="40%" border="0" cellspacing="0" cellpadding="10">
            {{ Form::open(['route' => ['usuario.update', $usuario->usuario],  'method' => 'PUT']) }}

                <label>Nombre(s)</label><br>
                <input value="{{ $usuario->nombre }}" name="name" id="name" required type="text" placeholder="Nombre(s)"/><br>
                <label>Apellidos</label><br>
                <input value="{{ $usuario->apellidos }}" name="apellidos" id="apellidos" type="text" placeholder="Apellidos" /><br>
                <label>Usuario</label><br>
                <input value="{{ $usuario->usuario }}" name="usuario" id="usuario" type="text" placeholder="Usuario"
                     oninvalid="setCustomValidity('Debes agregar un nombre de usuario')"
                     oninput="setCustomValidity('')" /><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" required pattern=".{6,}"
                     oninvalid="setCustomValidity('El password es obligatorio y debe tener como mínimo 6 caracteres')"
                     oninput="setCustomValidity('')" /><br />
                <label>Email</label><br>
                <input value="{{ $usuario->email }}" type="email" name="correo" placeholder="Email" id="email" /><br>
                <label>Tipo de usuario</label><br>
                <select required name="tipoUsuario">
                    <option></option>
                    <option value="Administrador">Administrador</option>
                    <option value="Encuestador">Encuestador</option>
                </select></br></br>
                 {{ Form::submit ('Guardar') }}
            {{  Form::close() }}
            {{ Form::open(['route' => ['usuario.destroy', $usuario->usuario],  'method' => 'DELETE']) }}
                    {!!Form::submit ('Eliminar')!!}
            {{ Form::close() }}
            </table>
            </ul>
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
