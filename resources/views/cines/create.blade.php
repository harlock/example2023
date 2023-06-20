@extends("layouts.app")
@section("content")

<div class="row justify-content-center">
	<div class="col-8 bg-white pt-3">
			<form action="{{url('cines')}}" method="POST">
				@csrf
				<div class="pull-left">
					 Agrega un cine	 
				</div>

				<div class="mb-3">
					 <label for="calle" class="form-label">Calle</label>
					 <input type="text" class="form-control" name="calle" id="calle" placeholder="Escribe la calle">
				</div>
				<div class="mb-3">
					 <label for="numero" class="form-label">Numero</label>
					 <input type="text" class="form-control" name="numero" id="numero" placeholder="Ingresa el numero">
				</div>
				<div class="mb-3">
					 <label for="telefono" class="form-label">Telefono</label>
					 <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Escribe el telefono">
				</div>
				<div class="mb-3">
					<a href="{{url('cines}')}}"class="btn btn-light">Cancelar</a>
					<button class="btn btn-success">Guardar</button>
				</div>


			</form>
	</div>		
</div>
@endsection