@extends("layouts.app")
@section("content")

<div class="container">
	<form action="{{url('clasificaciones')}}" method="POST">
		@csrf
		<div class="card-body">
			 Crear una nueva clasificación	 
		</div>

		<div class="mb-3">
			 <label for="clasificacion" class="form-label">Descripcion clasificación</label>
			 <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Escribe la descripcion de la clasificación">
		</div>
		<div class="mb-3">
			<a href="{{url('clasificaciones}')}}"class="btn btn-light">Cancelar</a>
			<button class="btn btn-success">Guardar</button>
		</div>


	</form>
</div>
@endsection