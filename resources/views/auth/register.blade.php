@extends('layouts.base')

@section('content')
    <br>
        <div class="columns is-centered">

            <div class="column is-half">
                <h1 class="title is-1">Piece Of Cake v0.1 <span><img src="{{asset('img/piece.png')}}" width="64px"></span></h1>
                <p>
                    Es un aplicativo web para reforzar el conocimiento adquirido del Idioma Inglés en los Estudiantes de la <b>I. E. 14917 Micaela Bastidas - Máncora.</b> 
                </p>
                <br>
                <div class="box">
                    <h3 class="title is-3">Registra tus Datos</h3>
                    <span>Como primer usuario se le asigna el rol de <b>Administrador</b> por defecto.</span><br><br>

                    <form method="POST" action="{{ url('/user/register') }}">
                        @csrf
                        <div class="field">
                            <label class="label">* Nombres y Apellidos:</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Ingresar Nombres y Apellidos" name="name">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">* DNI:</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Ingresar DNI (8 Dígitos)" name="dni" maxlength="8">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">* Contraseña:</label>
                            <div class="control">
                                <input class="input" type="password" placeholder="Ingresar Contraseña (Máximo de 16 Caracteres)" name="password" maxlength="16">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Rol:</label> 
                            <div class="control">
                                <input class="input" type="text" value="Administrador" name="role" readonly>
                            </div>
                        </div>
                        

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-success" type="submit">Registrar</button>
                            </div>
                            <div class="control">
                                <a class="button is-text" href="{{ url('login') }}">Ir a Ingresar</a>
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