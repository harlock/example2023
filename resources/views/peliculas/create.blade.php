@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">



            <form action="{{url('peliculas')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    Agrega una pelicula
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título de la película</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escribe el título de la película">
                </div>

                <div class="mb-3">
                    <label for="clasificacion" class="form-label">Clasificacón de la película</label>
                    <select class="form-control" name="clasificacion" id="clasificacion" >
                        <option value="" disabled selected>Selecciona un valor</option>
                        @foreach($clasificaciones as $clasificacion)
                            <option value="{{$clasificacion->id_clasificacion}}">{{$clasificacion->desc_clas}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Género de la película</label>
                    <select class="form-control" name="genero" id="genero" placeholder="Escribe el título de la película">
                        <option value="" disabled selected>Selecciona un valor</option>
                        @foreach($generos as $generos)
                            <option value="{{$generos->id_genero}}">{{$generos->descripcion_g}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Director de la película</label>
                    <select class="form-control" name="director" id="director" placeholder="Escribe el título de la película">
                        <option value="" disabled selected>Selecciona un valor</option>
                        @foreach($directores as $director)
                            <option value="{{$director->id_director}}">{{$director->ap_d}} {{$director->am_d}} {{$director->nombre_d}}</option>
                        @endforeach

                        {{--{{$director->ap_d." ".$director->am_d." ".$director->nombre_d}}--}}
                    </select>
                </div>
                <div class="mb-3">
                    <label for="portada" class="form-label">Portada de la película</label>
                    <input type="file" class="form-control" name="portada" id="portada" placeholder="Escribe el título de la película">
                </div>

                <div class="mb-3">
                    <a href="{{url('peliculas')}}"class="btn btn-light">Cancelar</a>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>

    </div>
@endsection
