@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
            <div class="col-8 bg-white pt-3">
                <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            @foreach($protagonistas as $protagonista)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$protagonista->nombre_p}}</td>
                    <td>{{$protagonista->ap_p}}</td>
                    <td>{{$protagonista->am_p}}</td>
                    <td>
                        <form action="{{route('protagonistas.destroy',$protagonista->id_protagonista)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url('protagonistas/create')}}" class="btn btn-primary">Agregar protagonista</a>
            </div>
    </div>        

@endsection