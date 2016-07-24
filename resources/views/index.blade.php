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
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                </button>
                <a class="navbar-brand" href="#page-top">Encuestas DOOD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top">Encuestas DOOD</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#encuestas">Encuestas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#dood">DOOD</a>
                    </li>
                    <li class="page-scroll">
                        <a href="home">Entrar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Inicia la aventura</span>
                        <hr class="star-light">
                        <span class="skills">Resolver encuestas nunca fue tan sencillo.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Encuestas Grid Section -->
    <section id="encuestas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Encuestas</h2>
                    <hr class="star-primary">
                </div>
            </div>
            
                </div>
            </div>
        </div>
    </section>

    <!-- DOOD Section -->
    <section class="success" id="dood">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>DOOD</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p></p>
                </div>
                <div class="col-lg-4">
                    <p></p>
                </div>
               <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        
                    </a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Entrar</h2>
                    <hr class="star-primary">
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <form name="FormUsuario" id="usuarioForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo Electronico</label>
                                <input type="email" class="form-control" placeholder="Correo Electronico" id="email" name="email" required data-validation-required-message="Por favor ingresa tu correo electronico.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" name="contraseña" required data-validation-required-message="Por favor ingresa una contraseña.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg">Iniciar Sesión</button>
                            </div>
                            <div class="col-lg-5">
                            <p>¿No tienes cuenta? <a href="registro"><font color="4ab1ff">Regístrate</font></a></p>
                        </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
                        <p> Parque Tecnológico Piso 6. Prolongación Av. Tecnológico Norte 801.
                         Fraccionamiento San Pablo.</p> <br>Querétaro. México</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>En la web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/DooDmx/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/doodmx" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Sobre DOOD</h3>
                        <p>Diseñamos experiencias que trascienden. <a href="http://dood.mx"><font color="4ab1ff">Conoce DOOD</font></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy;
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

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
