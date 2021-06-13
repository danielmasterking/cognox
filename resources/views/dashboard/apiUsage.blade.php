@extends('layouts/dashboard/main')

@section('seccion')

<h1>This Month's API Usage:</h1>
<hr>
<h1>Statistics</h1>

<table class="table table-striped">
   <thead>
       <tr>
        <th>
           <h3>{{$mesActual}}</h3>
        </th>
        <th></th>
       </tr>
   </thead>
   <tbody>
    @foreach ($peticiones as $row)
    <tr>
        <td>
            {{$row->date_usage}}
        </td>
        <td>
            {{$row->total}}
        </td>
    </tr>
    @endforeach
   </tbody>
</table>
@endsection