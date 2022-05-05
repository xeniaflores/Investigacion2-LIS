@extends('layouts.miPlantilla')
@section('titulo','Inicio')
@section('contenido')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-offset-2 col-md-8">
                    <h1>Editar un usuario</h1>
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
            <form action="{{route('usuario.update')}}" method="POST">
                @csrf 
                @method('put')
                <input type="hidden" name="user_id" value="{{$result->user_id}}"/>
                <div class="form-group">
                   <label for="nombre_usuario">Nombre Usuario</label>
                   <input type="text" value="{{$result->username}}" class="form-control" 
                   placeholder="Nombre Usuario" name="username" id="nombre_usuario" />
               </div>
               <div class="form-group">
                   <label for="correo_usuario">Correo Usuario</label>
                   <input type="text" value="{{$result->user_email}}" class="form-control" 
                   placeholder="Correo Usuario" name="user_email" id="correo_usuario" />
               </div>
               <div class="form-group">
                   <label for="estado">Estado</label>
                   <select class="form-control" id="estado" name="user_status">
                       <option value="1" {{$result->user_status==1?'selected="selected"':""}}>Activo</option>
                       <option value="0" {{$result->user_status==0?'selected="selected"':""}}>De baja</option>
                   </select>
               </div> 
               <button type="submit" class="btn btn-success">Enviar</button>
           </form>
       </div>
   </div>
</div>
@endsection