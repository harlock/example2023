@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
            <div class="col-8 bg-white pt-3">
                <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombre de director</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            @foreach($directores as $directores)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$directores->nombre_d}}</td>
                    <td>{{$directores->ap_d}}</td>
                    <td>{{$directores->am_d}}</td>
                    <td>
                         <form action="{{route('directores.destroy',$directores->id_director
                            )}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
                <a href="{{url('directores/create')}}" class="btn btn-primary">Agregar directores</a>

            </div>
    </div>        

@endsection