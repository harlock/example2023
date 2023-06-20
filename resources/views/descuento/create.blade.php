@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Crear un nuevo descuento
                </div>
                <div class="card-body">
                    <form action="{{url("descuentos")}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{old("descripcion")}}" placeholder="Escribe la descripción del descuento">
                            @error('descripcion')
                                <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="descuento" class="form-label">Porcentaje de descuento</label>
                            <input type="number" class="form-control" id="descuento" name="descuento">
                        </div>
                        <div class="mb-3">
                            <a href="{{url("descuentos")}}" class="btn btn-light">Cancelar</a>

                            <button class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
