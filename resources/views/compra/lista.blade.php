@extends('admin.layout')
@section('content')
<div class="row">

<section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Insumos</h3></div>
          <div class="pull-right">
            
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>Medida</th>
               <th>Cantidad</th>
               <th>Precio</th>               
              
             </thead>
             <tbody>
              @if($insumos->count())  
              @foreach($insumos as $insumo)  
              <tr>
                <td>{{$insumo->nombre}}</td>
                <td>{{$insumo->descripcion}}</td>
                <td>{{$insumo->medida}}</td>
                <td>{{$insumo->cantidad}}</td>
                <td>{{$insumo->price}}</td>                
                
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

</div>
  

@endsection