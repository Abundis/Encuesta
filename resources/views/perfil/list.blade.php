@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div lass="col-lg-2"></div>
            <div class="col-lg-3 col-lg-offset-2">
                <table width="100%" border="0" cellspacing="0" cellpadding="10">
                      
                      <tr>
                        <td><label>Usuario:</label></td>
                        <td>{{Auth::user()->id_cliente}}</td>
                        <tr>
                            <td><label>Nombre:</label></td>
                            <td>{{Auth::user()->nombre}}</td>
                        </tr>
                        <tr>
                            <td><label>Apellidos:</label></td>
                            <td>{{Auth::user()->apellidos}}</td>
                        </tr>
                        <tr>
                            <td><label>Genero:</label></td>
                            <td>{{Auth::user()->genero}}</td>
                        </tr>
                        <tr>
                            <td><label>Dinero:</label></td>
                            <td>${{Auth::user()->dinero}}.00</td>
                        </tr>
                        <tr>
                            <td><label>Email:</label></td>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td><label>Password:</label></td>
                            <td>******</td>
                        </tr>
                        <tr>
                            <td><label>Telefono:</label></td>
                            <td>[{{Auth::user()->telefono}}]</td>
                        </tr>
                        <tr>
                            <td><label>Direccion:</label></td>
                            <td>{{Auth::user()->calleynum}}</td>
                        </tr>
                        <tr>
                            <td><label>Estado:</label></td>
                            <td>{{Auth::user()->estado}}</td>
                        </tr>
                        <tr>
                            <td><label>Ciudad:</label></td>
                            <td>{{Auth::user()->ciudad}}</td>
                        </tr>
                      </tr>
                        <tr><br>
                      <td><a href="{{ route('perfil.edit', Auth::user()->id_cliente) }}">Editar o Eliminar</a></td>
                      </tr>
                      
                </table>
            </div>
    </div>
</div>
@endsection