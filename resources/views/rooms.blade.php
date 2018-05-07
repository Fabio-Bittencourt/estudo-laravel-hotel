@extends('index')
@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Lista de Quartos</h1>
        </div>
    </div>
</div>

<div class='container-fluid'>
    <div class='row'>
        <div class='col'>
            <table class='table table-striped'>
                <tr>
                    <th>Numero</th>
                    <th>Andar</th>
                    <th>Dimensão</th>
                    <th>Descrição</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach($room as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->andar}}</td>
                    <td>{{$r->room_dimension}}</td>
                    <td>{{$r->description}}</td>
                    <td>
                        <a href='/rooms/remove/{{ $r->id }}' class='btn btn-danger'>Remover</a>
                        <a href='/rooms/edit/{{$r->id}}' class='btn btn-warning'>Editar</a>
                    </td>

                </tr>
            @endforeach

            </table>
        </div>
    </div>
</div>

@endsection


