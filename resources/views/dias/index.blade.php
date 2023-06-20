@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
            <div class="col-8 bg-white pt-3">
                <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Dia</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            @foreach($dias as $dia)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$dia->descripcion_d}}</td>
                    <td>
                        <form action="{{route('dias.destroy',$dia->id_dia)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
                <a href="{{url('dias/create')}}" class="btn btn-primary">Agregar un dia</a>

            </div>
    </div>        

@endsection