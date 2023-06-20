@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
            <div class="col-8 bg-white pt-3">
                <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Calle</td>
                <td>Numero</td>
                <td>Telefono</td>
                <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            @foreach($cines as $cine)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cine->calle}}</td>
                    <td>{{$cine->numero}}</td>
                    <td>{{$cine->telefono}}</td>
                    <td>
                        <form action="{{route('cines.destroy',$cine->id_cine)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
                 <a href="{{url('cines/create')}}" class="btn btn-primary">Agregar cine</a>
            </div>
    </div>        

@endsection