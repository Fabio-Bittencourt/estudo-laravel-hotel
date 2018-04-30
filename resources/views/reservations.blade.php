@extends('index')

@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Lista de Quartos reservados</h1>
        </div>
    </div>
</div>

<div class='container-fluid'>
    <div class='row'>
        <div class='col'>
            <table class='table table-striped'>
                <tr>
                    <th>Numero do Quarto</th>
                    <th>Data de Entrada</th>
                    <th>Data de Saida</th>
                    <th>Nome do Hospede</th>
                    <th></th>
                </tr>
                       </table>
        </div>
    </div>
</div>



@endsection
