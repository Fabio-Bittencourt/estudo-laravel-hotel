@extends('index')

@section('content')
<div class='container-fluid'>
    <div class='row justify-content-md-center'>
        <div class=''>
            <h1>Edição de Quartos</h1>
        </div>
    </div>
</div>

<div class='container'>
    <div class='row'>
        <div class='col'>
            <form method='POST' action='/room/update/{{$infoRoom->id}}'>
                <input type='hidden' name='_token' value={{csrf_token()}}>
                <div class='form-group row'>
                    <label class='col-sm-3 col-form-label'>Andar:</label>
                    <div class='col-sm-3'>
                        <input type='number' name='andar' class='form-control' value="{{$infoRoom->andar}}" />
                    </div>
                    <label class='col-sm-3 col-form-label'>Dimensões:</label>
                    <div class='col-sm-3'>
                        <input type='text' name='room_dimension' class='form-control' value="{{$infoRoom->room_dimension}}"/>
                    </div>
                </div>
                <div class='form-group row'>
                    <label class='col-sm-3 col-form-label'>Descrição</label>
                    <div class='col-sm-12'>
                        <input type='text' name='description' class='form-control' value="{{$infoRoom->description}}"/>
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
