@extends('index')
@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Formulários de Reservas</h1>
        </div>
    </div>
</div>


<div class='container'>
    <div class='row'>
        <div class='col'>
            <form method='POST' action='/form-add-reservation/add'>
                <input type='hidden' name='_token' value={{csrf_token()}}>
                <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Campo</label>
                    <div class='col-sm-4'>
                        <input type='text' name='campo' class='form-control' />
                    </div>
                    <label class='col-sm-1 col-form-label'>Campo</label>
                    <div class='col-sm-3'>
                        <input type='text' name='campo' class='form-control' />
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
