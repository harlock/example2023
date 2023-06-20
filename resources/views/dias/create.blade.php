@extends("layouts.app")
@section("content")
<div class="row justify-content-center">
	<div class="col-8 bg-white pt-3">

		<form action="{{url('dias')}}" method="POST">
			@csrf
			<div class="card-body">
				 Agregar dia	 
			</div>

			<div class="mb-3">
				 <label for="descripcion" class="form-label">Descripcion dia</label>
				 <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Escribe la descripcion del dia">
			</div>	
			<div class="mb-3">
				<a href="{{url('dias')}}"class="btn btn-light">Cancelar</a>
				<button class="btn btn-success">Guardar</button>
			</div>


		</form>
	</div>

</div>

@endsection