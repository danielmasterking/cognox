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
              <input type="hidden" value="{{$userData->id}}" id="id_user">
              <Select class="form-control" id="account_prop">
                <option value="" selected>Selecciona una cuenta</option>
                <option value="ahorros">Ahorros</option>
                <option value="corriente">Corriente</option>
              </Select>
            </div>

            <div class="col-md-6 col-xs-12"> 
              <input type="number" class="form-control" placeholder="Valor a consignar" id="value_prop">
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
          <a href="{{ route("add_tercero") }}" class="btn btn-primary">Registrar cuenta</a>
      </div> 

      <table class="table table-striped">
        <thead>
           <tr>
             <th>Nombre</th>
             <th>identificacion</th>
             <th>Cuenta</th>
             <th></th>
           </tr>
        </thead>
        <tbody>
          @foreach ($terceros as $tercero)
            <tr>
                <td>{{$tercero->name}}</td>
                <td>{{$tercero->identification}}</td>
                <td>{{$tercero->account_number}}</td>
                <td>
                  <a href="#">Transferir</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
</div
{{-- ************************************************************************************** --}}



@endsection
