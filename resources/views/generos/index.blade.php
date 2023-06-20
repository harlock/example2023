@extends("layouts.app")
@section("content")

<div class="row justify-content-center">
    <div class="col-8 bg-white pt-3">
        <table class="table">
            <thead>
            <tr>
                <td>Indice</td>
                <td>Descripción</td>
            </tr>
            </thead>
            <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$genero->descripcion_g}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
