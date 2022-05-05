@extends('layouts.miPlantilla')
@section('titulo','Crear')
@section('contenido')
 <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-offset-2 col-md-8">
                        <h1>Crear un nuevo usuario</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-offset-2 col-md-8">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <a href="{{route('usuario.index')}}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form action="{{route('usuario.store')}}" method="POST">
                     @csrf 
                     <div class="form-group">
                        <label for="nombre_usuario">Nombre Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre Usuario" name="username" id="nombre_usuario" />
                    </div>
                    <div class="form-group">
                        <label for="correo_usuario">Correo Usuario</label>
                        <input type="text" class="form-control" placeholder="Correo Usuario" name="user_email" id="correo_usuario" />
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="user_status">
                            <option value="1" selected="selected">Activo</option>
                            <option value="0">De baja</option>
                        </select>
                    </div>                    
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection