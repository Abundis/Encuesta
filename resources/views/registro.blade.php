<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Encuestas</title>

    </head>

        <body id="page-top" class="index">

            <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/freelancer.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="font-awesome/css/font-awesome.css" rel="stylesheet" rel="stylesheet" type="text/css">
            
            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <a class="navbar-brand">Encuestas DOOD</a>
                </div>
            </div>
            </nav></br></br></br></br>
            
            <!-- Regístrate Section -->
            <section id="signup">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Regístrate</h2>
                            <hr class="star-primary">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            {!! Form::open(array('route' => 'registro.store')) !!}
                            {!!csrf_field()!!}
                            <form name="FormUsuario" id="usuarioForm" novalidate>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        
                                        <label>Nombre(s)</label>
                                        <input type="text" class="form-control" placeholder="Nombre(s)" id="name" name="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos" required data-validation-required-message="Por favor ingresa tus Apellidos.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" placeholder="Usuario" id="id_cliente" name="id_cliente" required data-validation-required-message="Por favor escribre tu nombre de usuario.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Correo Electronico</label>
                                        <input type="email" class="form-control" placeholder="Correo Electronico" id="correo" name="correo" required data-validation-required-message="Por favor ingresa tu correo electronico.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required data-validation-required-message="Por favor ingresa una contraseña.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 ">
                                        <label>Género</label></br>
                                        <label class="radio-inline"><input type="radio" name="genero" value="1" required data-validation-required-message="Por favor ingresa tu Apellido.">Hombre</label>
                                        <p class="help-block text-danger"></p>
                                        <label class="radio-inline"><input type="radio"  name="genero" value="2" required data-validation-required-message="Por favor ingresa tu Apellido.">Mujer</label>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control" placeholder="Telefono" id="telefono" name="telefono">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" placeholder="Dirección" id="calleynum" name="calleynum" required data-validation-required-message="Por favor agrega una dirección">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Ciudad</label>
                                        <input type="text" class="form-control" placeholder="Ciudad" id="ciudad" name="ciudad" required data-validation-required-message="Por favor agrega tu ciudad">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Estado</label>
                                        <input type="text" class="form-control" placeholder="Estado" id="estado" name="estado" required data-validation-required-message="Por favor agrega tu estado.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-lg">Registrar</button>
                                    </div>
                                </div>
                            </form>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </section>

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <script src="js/classie.js"></script>
            <script src="js/cbpAnimatedHeader.js"></script>

            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/usuarioForm.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/freelancer.js"></script>


        </body>
</html>