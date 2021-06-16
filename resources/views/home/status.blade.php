@extends('layouts/dashboard/main')

@section('seccion')
{{-- ************************************************************************************** --}}
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Ahorros
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
            <table class="table table-striped">
                @foreach ($historySaving as $history)
                    <tr>
                        <td>{{$history->movement}}</td>
                        <td>{{$history->amount}}</td>
                        <td>{{$history->date}}</td>
                    </tr>
                @endforeach

            </table>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Corriente
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <table class="table table-striped">
            @foreach ($historyCurrent as $history)
                <tr>
                    <td>{{$history->movement}}</td>
                    <td>{{$history->amount}}</td>
                    <td>{{$history->date}}</td>
                </tr>
            @endforeach

        </table>
      </div> 
    </div>
  </div>
  
</div
{{-- ************************************************************************************** --}}



@endsection
