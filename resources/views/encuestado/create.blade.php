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
                    <a class="navbar-brand">Encuestas DOOD</a>
                </div>
            </div>
        </nav></br></br></br></br>
            <div class="col-lg-5 col-lg-offset-4 col-xs-8 floating-label-form-group controls">
                <ul>
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
            {!! Form::open(array('route' => 'encuestado.store')) !!}
                {!!csrf_field()!!}
                <label>Nombre(s)</label><br>
                <input name="name" id="name" required type="text" placeholder="Nombre(s)"/><br>
                <label>Apellidos</label><br>
                <input name="apellidos" id="apellidos" type="text" placeholder="Apellidos" /><br>
                <label>Usuario</label><br>
                <input name="id_cliente" id="id_cliente" type="text" placeholder="Usuario"
                     oninvalid="setCustomValidity('Debes agregar un nombre de usuario')"
                     oninput="setCustomValidity('')" /><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" required pattern=".{6,}"
                     oninvalid="setCustomValidity('El password es obligatorio y debe tener como mínimo 6 caracteres')"
                     oninput="setCustomValidity('')" /><br />
                <label>Email</label><br>
                <input type="email" name="correo" placeholder="Email" id="email" /><br>

                <label>Genero</label><br>
                <input type="radio" name="genero" value="1"> Hombre 
                <input type="radio" name="genero" value="2"> Mujer<br>
                <label>Telefono</label><br>
                <input type="text" name="telefono" placeholder="Telefono" id="telefono" /><br>
                <label>Direccion</label><br>
                <input type="text" name="calleynum" placeholder="Calle y numero" id="calleynum" /><br>
                <label>Ciudad</label><br>
                <input type="text" name="ciudad" placeholder="Ciudad" id="ciudad" /><br>
                <label>Estado</label><br>
                <input type="text" name="estado" placeholder="Estado" id="estado" /><br><br>
                <button type="submit" id="btnAgregarCliente"name="btnAgregarCliente">Registrate</button>
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
