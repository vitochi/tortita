@extends('admin.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Compras</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('compra.create') }}" class="btn btn-info" >Nueva Compra</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nro. Operación</th>
               <th>Fecha</th>
               <th>Proveedor</th>
               <th>Detalle</th>
               <th>Total</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($compras->count())  
              @foreach($compras as $compra)  
              <tr>
                <td>{{$compra->id}}</td>
                <td>{{$compra->fecha}}</td>
                <td>{{$compra->proveedor}}</td>
                <td><a href="#">Detalle</a></td>
                <td>{{$compra->total}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('CompraController@edit', $compra->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('CompraController@destroy', $compra->id)}}" method="post">
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
      {{ $compras->links() }}
    </div>
  </div>
</section>
 
@endsection