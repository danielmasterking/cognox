@extends('layouts/login')

@section('seccion')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                
                                <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Nombre completo">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                
                                <input id="identification_number" type="number" class="form-control form-control-user @error('identification_number') is-invalid @enderror" 
                                name="identification_number" value="{{ old('identification_number') }}" required autocomplete="identification_number" autofocus  placeholder="Numero de identificacion">

                                @error('identification_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                
                                <input id="amount" type="number" class="form-control form-control-user @error('amount') is-invalid @enderror" 
                                name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus  placeholder="Monto inicial cuenta de ahorros">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>


                        <div class="form-group row">
                        
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                
                                <input id="amount_current" type="number" class="form-control form-control-user @error('amount_current') is-invalid @enderror" 
                                name="amount_current" value="{{ old('amount_current') }}" required autocomplete="amount_current" autofocus  placeholder="Monto inicial cuenta corriente">

                                @error('amount_current')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password" placeholder="Contrase??a" onkeypress="return valideKey(event);" onkeydown="return ValidaLongitud(this, 4)">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                
                                <input id="password-confirm" type="password" class="form-control form-control-user" 
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contrase??a" onkeypress="return valideKey(event);" onkeydown="return ValidaLongitud(this, 4)">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Register') }}
                        </button>
                        <hr>
                        {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a> --}}
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">Recuperar contrase??a?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">Ya tengo una cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/scriptsJs/register.js') }}"></script>
@endsection
