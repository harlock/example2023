@extends("layouts.app")
@section("content")
<div class="row justify-content-center">
	<div class="col-8 bg-white pt-3">

		<form action="{{url('directores')}}" method="POST">
			@csrf
			<div class="card-body">
				 Agregar Directores	 
			</div>

			<div class="mb-3">
				 <label for="nombre" class="form-label">Nombre del director</label>
				 <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe el nombre">
			</div>	
			<div class="mb-3">
				 <label for="paterno" class="form-label">Apellido Paterno</label>
				 <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Escribe el apellido paterno">
			</div>	
			<div class="mb-3">
				 <label for="materno" class="form-label">Apellido Materno</label>
				 <input type="text" class="form-control" name="materno" id="materno" placeholder="Escribe el apellido materno">
			</div>	
			<div class="mb-3">
				<a href="{{url('directores')}}"class="btn btn-light">Cancelar</a>
				<button class="btn btn-success">Guardar</button>
			</div>


		</form>
	</div>
</div>
@endsection