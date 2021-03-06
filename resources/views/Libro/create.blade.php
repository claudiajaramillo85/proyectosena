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
					<h3 class="panel-title">Registro de Equipo</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('equipo.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="codigo_barras_equipo" id="codigo_barras_equipo" class="form-control input-sm" placeholder="Codigo de Barras Del Equipo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="marca_portatil" id="marca_portatil" class="form-control input-sm" placeholder="Marca Del Portatil">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="referencia_portatil" id="referencia_portatil" class="form-control input-sm" placeholder="Referencia Del Portatil">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="serial_portatil" id="serial_portatil" class="form-control input-sm" placeholder="Serial Portatil">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="serial_cargador" id="serial_cargador" class="form-control input-sm" placeholder="Serial Cargador">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="novedades" class="form-control input-sm" placeholder="novedades"></textarea>
							</div>
							<div class="form-group">
								<textarea name="disponibilidad" class="form-control input-sm" placeholder="disponibilidad"></textarea>
							</div>							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('equipo.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection