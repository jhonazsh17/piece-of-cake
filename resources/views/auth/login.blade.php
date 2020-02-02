@extends('layouts.base')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
    <br><br><br><br>
        <div class="columns is-centered">

            <div class="column is-half">
                <h1 class="title is-1">Piece Of Cake v0.1 <span><img src="{{asset('img/piece.png')}}" width="64px"></span></h1>
                <p>
                    Es un aplicativo web para reforzar el conocimiento adquirido del Idioma Inglés en los Estudiantes de la <b>I. E. 14917 Micaela Bastidas - Máncora.</b> 
                </p>
                <br>
                <div class="box">
                    <h3 class="title is-3">Ingresar</h3>
                    
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="field">
                            <label class="label">Usuario:</label>
                            <div class="control">
                                <input class="input" type="text" name="dni" placeholder="Ingresar Usuario">

                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Contraseña:</label>
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Ingresar Contraseña">
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-success" type="submit">Ingresar</button>
                            </div>
                            <div class="control">
                                @if($isAdministrator==1)
                                    <!-- Nothing -->
                                @else
                                    <a class="button is-text" href="{{ url('register') }}">Registra tus datos</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div style="text-align: center">
                    Desarrollado por <a>Ing. Jhon Medina</a>, exclusivo para <a>I. E. 14917 Micaela Bastidas</a><br><br>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
<script type="">
        var heightParentContainer = window.innerHeight;
        document.getElementById("parent-container").style.height = heightParentContainer+"px";
        document.getElementById("parent-inner-container").style.height = heightParentContainer+"px";
    </script>

@endsection
