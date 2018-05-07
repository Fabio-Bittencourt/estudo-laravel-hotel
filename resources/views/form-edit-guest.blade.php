@extends('index')

@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Formulários de edição de cadastro de Hospedes</h1>
        </div>
    </div>
</div>


<div class='container'>
    <div class='row'>
        <div class='col'>
            <form method='POST' action='/guest/update/{{$guest->id}}'>
                <input type='hidden' name='_token' value={{csrf_token()}}>
                <div class='form-group row'>
                    <label class='col-sm-2 col-form-label'>Nome completo:</label>
                    <div class='col-sm-4'>
                        <input type='text' name='full_name' class='form-control' value="{{$guest->full_name}}"/>
                    </div>
                    <label class='col-sm-1 col-form-label'>RG</label>
                    <div class='col-sm-3'>
                        <input type='text' name='id_rg' class='form-control' value="{{$guest->id_rg}}" />
                    </div>
                </div>
                 <div class='form-group row'>
                     <div class='col-sm-12'>
                        <button type='submit' name='update' class='btn btn-primary'>Editar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



@endsection

