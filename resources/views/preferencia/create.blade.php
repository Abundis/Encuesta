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
                  <li role="presentation" class="active"><a href="/preferencia"><font color="#FFF">Preferencias</font></a></li>
                  <li role="presentation"><a href="/pregunta"><font color="1a242f">Preguntas</font></a></li>
                  <li role="presentation"><a href="/encuesta"><font color="1a242f">Encuestas</font></a></li>
                  <li role="presentation"><a href="/usuario"><font color="1a242f">Usuarios</font></a></li>
                  <li role="presentation"><a href="/encuestado"><font color="1a242f">Encuestados</font></a></li>
                  <li role="presentation"><a href="#"><font color="1a242f">Cerrar Sesión</font></a></li>
                </ul>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
              <div class="col-lg-3">
                <ul>
                  {!! Form::open(array('route' => 'preferencia.store')) !!}
                    {!!csrf_field()!!}
                      <label>Nombre de la Preferencia</label><br>
                      <input name="namePreferencia" id="namePreferencia" required type="text" placeholder="Ejemplo: Deportes" required pattern=".{0,15}"
                           oninvalid="setCustomValidity('El número maximo de caracteres es 15')"
                           oninput="setCustomValidity('')" /><br />
                      <label>Descripción</label><br>
                      <textarea name="descripcion" id="descripcion" placeholder="Explica tu preferencia"></textarea><br>
                      <button type="submit" id="btnAgregarPreferencia"name="btnAgregarPreferencia">Agregar Preferencia</button>
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