@extends("layouts.app")
@section("content")


    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <h1 class="alert alert-success">Peliculas</h1>
            <a href="{{url('peliculas/create')}}" class="btn btn-primary">Agregar pelicula</a>

            <div class="row">
                @foreach($peliculas as $pelicula)
                    <div class="card col-4 mt-4">
                        <img src="{{asset("storage/files/".$pelicula->portada)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$pelicula->titulo}}</h5>
                            <p class="card-text"><span class="fw-bold">Director</span> {{$pelicula->getDirector->ap_d." ".$pelicula->getDirector->am_d." ".$pelicula->getDirector->nombre_d}}</p>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-primary btnProtagonista" data-bs-toggle="modal" data-bs-target="#protagonistaModal" data-id="{{$pelicula->id_pelicula}}" data-protagonistas="{{$pelicula->getProtagonistas()}}">
                                Protagonistas
                            </button>


                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="protagonistaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar protagonistas a la pelicula</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route("asigna_protagonista.store")}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                @foreach($protagonistas as $protagonista)
                                    <div class="form-check col-4">
                                        <input class="form-check-input" type="checkbox" name="protagonistas[]" value="{{$protagonista->id_protagonista}}" id="radioProtagonista{{$loop->iteration}}">
                                        <label class="form-check-label" for="radioProtagonista{{$loop->iteration}}">
                                            {{$protagonista->ap_p}} {{$protagonista->am_p}} {{$protagonista->nombre_p}}
                                        </label>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <input type="hidden" name="id_pelicula" id="id_pelicula">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    <script type="text/javascript">
        const boxes = document.querySelectorAll('.btnProtagonista');

        boxes.forEach(box => {
            box.addEventListener('click', function handleClick(event) {

                let protagonistas=this.getAttribute("data-protagonistas");
                protagonistas=protagonistas.substring(1,protagonistas.length-1).split(",");

                protagonistas.forEach(id_protagonista =>  document.getElementById("radioProtagonista"+id_protagonista ).checked = true);

                let id_pelicula=this.getAttribute("data-id")
                document.getElementById("id_pelicula").value=id_pelicula;
            });
        });


    </script>
@endpush

