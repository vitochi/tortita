@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Insumos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('insumo.create') }}" class="btn btn-info" >Añadir Insumo</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>Proveedor</th>
               <th>Medida</th>
               <th>Cantidad</th>
               <th>Precio</th>               
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($insumos->count())  
              @foreach($insumos as $insumo)  
              <tr>
                <td>{{$insumo->nombre}}</td>
                <td>{{$insumo->descripcion}}</td>
                <td>{{$insumo->proveedor}}</td>
                <td>{{$insumo->medida}}</td>
                <td>{{$insumo->cantidad}}</td>
                <td>{{$insumo->price}}</td>                
                <td><a class="btn btn-primary btn-xs" href="{{action('InsumoController@edit', $insumo->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('InsumoController@destroy', $insumo->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $insumos->links() }}
    </div>
  </div>
</section>

@endsection