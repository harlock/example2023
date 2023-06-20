@extends("layouts.app")
@section("content")

<div class="row justify-content-center">
	<div class="col-8 bg-white pt-3">
			<form action="{{url('protagonistas')}}" method="POST">
				@csrf
				<div class="pull-left">
					 Agrega un protagonista	 
				</div>

				<div class="mb-3">
					 <label for="prota" class="form-label">Nombre del protagonista</label>
					 <input type="text" class="form-control" name="prota" id="prota" placeholder="Escribe el nombre">
				</div>
				<div class="mb-3">
					 <label for="ap" class="form-label">Apellido Paterno</label>
					 <input type="text" class="form-control" name="ap" id="ap" placeholder="Escribe el apellido paterno">
				</div>
				<div class="mb-3">
					 <label for="am" class="form-label">Apellido Materno</label>
					 <input type="text" class="form-control" name="am" id="telefono" placeholder="Escribe apellido materno">
				</div>
				<div class="mb-3">
					<a href="{{url('protagonistas}')}}"class="btn btn-light">Cancelar</a>
					<button class="btn btn-success">Guardar</button>
				</div>


			</form>
	</div>
</div>
@endsection