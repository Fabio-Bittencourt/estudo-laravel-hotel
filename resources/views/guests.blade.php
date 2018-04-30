@extends('index')

@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Lista de Hospedes Cadastrados</h1>
        </div>
    </div>
</div>

<div class='container-fluid'>
    <div class='row'>
        <div class='col'>
            <table class='table table-striped'>
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>Data de Cadastro</th>
                    <th></th>
                </tr>
            @foreach($hotel_guests as $g)
                <tr>
                    <td>{{$g->full_name}}</td>
                    <td>{{$g->id_rg}}</td>
                    <td>{{$g->created_at}}</td>
                    <td>
                        <a href='/guests/remove/{{$g->id }}' class='btn btn-danger'>Remover</a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>


@endsection
