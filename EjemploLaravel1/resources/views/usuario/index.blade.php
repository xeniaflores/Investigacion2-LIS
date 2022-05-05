@extends('layouts.miPlantilla')
@section('titulo','Inicio')
@section('contenido')
<div class="content">
   <div class="row">
       <div class="col-md-12">
           <div class="row">
               <div class="col-offset-2 col-md-8">
                   <h1>CRUD con API Rest</h1>
               </div>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-offset-2 col-md-8">
           <div class="row">
               <div class="col-md-offset-2 col-md-8">
                <a class="btn btn-primary" href="{{route('usuario.create')}}">Nuevo Usuario</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
   <div class="col-md-offset-2 col-md-8">
       <table class="table table-bordered">
           <thead>
               <tr>
                   <th class="text-center">#</th>
                   <th class="text-center">Nombre Usuario</th>
                   <th class="text-center">Correo</th>
                   <th class="text-center">Estado</th>
                   <th class="text-center">Operaciones</th>
               </tr>
           </thead>
           <tbody>
            @foreach($result as $row)
            <tr>
               <th scope="row">{{$row[0]}}</th>
               <td>{{$row[1]}}</td>
               <td>{{$row[2]}}</td>
               <td>{{$row[3]==1? 'Activo':'De baja'}}</td>
               
               <td>
                <a href="{{route('usuario.edit',$row[0])}}" class="btn btn-success">Modificar</a>
                <a href="{{route('usuario.delete',$row[0])}}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection
