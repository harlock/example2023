@extends("layouts.app")
@section("content")

    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <a href="{{url("descuentos/create")}}" class="btn btn-primary">Agregar descuento</a>
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Descripción</td>
                    <td>Porcentaje</td>
                    <td colspan="2">Acciones</td>
                </tr>
                </thead>
                <tbody >
                @foreach($descuentos as $descuento)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$descuento->desc_desc}}</td>
                        <td>{{$descuento->porcentaje}}</td>
                        <td>
                            <form action="{{route("descuentos.destroy",$descuento)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger">Eliminar</button>
                            </form>

                        </td>
                        <td>
                            <a href="{{route("descuentos.edit",$descuento)}}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
