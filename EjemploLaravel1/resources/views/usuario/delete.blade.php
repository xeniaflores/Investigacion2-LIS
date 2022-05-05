@extends('layouts.miPlantilla')
@section('titulo','Inicio')
@section('contenido')
<div class="content">
    <div class="row">
       <div class="col-md-12">
        <div class="row">
           <div class="col-offset-2 col-md-8">
               <h1>Eliminar un usuario</h1>
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
        <form action="{{route('usuario.destroy')}}" method="POST">
           @csrf
           @method('delete')
           <input type="hidden" name="user_id" value="{{$result->user_id}}"/>
           <div class="form-group">
            <label for="nombre_usuario">Nombre Usuario</label>
            <input readonly type="text" value="{{$result->username}}" class="form-control" name="username" id="nombre_usuario" />
        </div>
        <div class="form-group">
            <label for="correo_usuario">Correo Usuario</label>
            <input readonly type="text" value="{{$result->user_email}}" class="form-control" name="user_email" id="correo_usuario" />
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input readonly type="text" value="{{$result->user_status==1? 'Activo':'De baja'}}" class="form-control" name="estado" id="estado" /> 
        </div> 
        <button type="submit" class="btn btn-danger">Confirmar</button>
    </form>
</div>
</div>
</div>
@endsection