@extends('index')
@section('content')
<div class='container'>
    <a href='/form-add-room' class='btn btn-primary'>Adicionar Quarto</a>
</div>

<h2>Quantidade de Quartos disponíveis: {{$qtd_rooms}}</h2>

@endsection


