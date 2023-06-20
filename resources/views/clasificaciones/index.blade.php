@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
            <div class="col-8 bg-white pt-3">
                <a href="{{url('clasificaciones/create')}}" class="btn btn-primary">Agregar clasificación</a>
                <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Descripcion Clasificacion</td>
            </tr>
            </thead>
            <tbody>
            @foreach($clasificaciones as $clasificacion)
                <tr>
                    <td>{{$clasificacion->id_clasificacion}}</td>
                    <td>{{$clasificacion->desc_clas}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
    </div>        

@endsection