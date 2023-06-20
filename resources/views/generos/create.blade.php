@extends("layouts.app")
@section("content")
<div class="row justify-content-center">
	<div class="col-8 bg-white pt-3">

		<form action="{{url('generos')}}" method="POST">
			@csrf
			<div class="card-body">
				 Agrega un genero 
			</div>

			<div class="mb-3">
				 <label for="genero" class="form-label">Descripción Genero</label>
				 <input type="text" class="form-control" name="genero" id="genero" placeholder="Escribe la descripcion del genero">
			</div>
			<div class="mb-3">
				<a href="{{url('generos}')}}"class="btn btn-light">Cancelar</a>
				<button class="btn btn-success">Guardar</button>
			</div>


		</form>
	</div>

</div>
@endsection