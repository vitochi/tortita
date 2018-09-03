@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Insumos</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('insumo.update',$insumo->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$insumo->nombre}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" value="{{$insumo->descripcion}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="proveedor" id="proveedor" class="form-control input-sm" value="{{$insumo->proveedor}}">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cantidad" id="cantidad" class="form-control input-sm" value="{{$insumo->cantidad}}">
									</div>
								</div>
																				
							</div>		

							<div class="row">

								<div class="dropdown col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">

										<select class="form-control input-sm" name="medida" id="medida">
										  <option value="cm3" @if($insumo->medida=="cm3") selected @endif>cm3</option>
										  <option value="miligramos" @if($insumo->medida=="miligramos") selected @endif>miligramos</option>
										  <option value="Lts." @if($insumo->medida=="Lts.") selected @endif>Lts.</option>
										  <option value="gramos" @if($insumo->medida=="gramos") selected @endif>gramos</option>
										  <option value="Kg." @if($insumo->medida=="Kg.") selected @endif>Kg.</option>
										</select>
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="price" id="price" class="form-control input-sm" value="{{$insumo->price}}">
									</div>
								</div>										
							</div>							
																					
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('insumo.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection