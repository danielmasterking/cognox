@extends('layouts/dashboard/main')

@section('seccion')

<h1>Registrar cuenta de tercero</h1>
<form action="{{ route('insert_tercero') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Nombre completo" required>
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="identification" placeholder="Numero de identificacion" required>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <input type="number" class="form-control" name="account_number" placeholder="Numero de cuenta">
        </div>
        
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Crear</button>
</form>



@endsection
