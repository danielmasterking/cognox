@extends('layouts/dashboard/main')

@section('seccion')
{{-- ************************************************************************************** --}}
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Transferencia a cuentas propias 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <br>
        <form id="form-prop">
          <div class="row">
            <div class="col-md-6 col-xs-12"> 
              <Select class="form-control" id="account_prop">
                <option value="" selected>Selecciona una cuenta</option>
                <option value="{{$userData->account_number}}">Ahorros</option>
                <option value="{{$userData->account_numer_current }}">Corriente</option>
              </Select>
            </div>

            <div class="col-md-6 col-xs-12"> 
              <input type="text" class="form-control" placeholder="Valor a consignar" id="value_prop">
            </div>
          </div>
          <br>
          <button class="btn btn-success" onclick="record();" type="button">Consignar</button>
          <br>
        </form>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Transferencia a cuentas de terceros
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <button class="btn btn-primary">Registrar cuenta</button>
      </div> 
    </div>
  </div>
  
</div
{{-- ************************************************************************************** --}}



@endsection
