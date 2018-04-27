@extends('index')

@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Cadastro de Quartos</h1>
        </div>
    </div>
</div>


<div class='container'>
    <div class='row'>
        <div class='col'>
            <form method='POST' action='/form-add-room/add'>
                <input type='hidden' name='_token' value={{csrf_token()}}>
                <div class='form-group row'>
                    <label class='col-sm-3 col-form-label'>Andar:</label>
                    <div class='col-sm-3'>
                        <input type='number' name='andar' class='form-control' />
                    </div>
                    <label class='col-sm-3 col-form-label'>Dimensões:</label>
                    <div class='col-sm-3'>
                        <input type='text' name='room_dimension' class='form-control' />
                    </div>
                </div>
                <div class='form-group row'>
                    <label class='col-sm-3 col-form-label'>Descrição</label>
                    <div class='col-sm-12'>
                        <input type='text' name='description' class='form-control' />
                    </div>
                </div>
                <div class='form-group row'>
                     <div class='col-sm-12'>
                        <button type='submit' name='adicionar' class='btn btn-primary'>Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
