@extends('layouts.base')

@section('content')
<br><br>
    <div class="columns is-centered">
        <div class="column is-half">
            <h1 class="title is-1">Piece Of Cake v0.1 <span><img src="{{asset('img/piece.png')}}" width="64px"></span></h1>
            <p>
                Es un aplicativo web para reforzar el conocimiento adquirido del Idioma Inglés en los Estudiantes de la <b>I. E. 14917 Micaela Bastidas - Máncora.</b> 
            </p>
            <br>

            <div class="box">
                <h1 class="title" style="text-align: center">Welcome Students!</h1>
                <p style="text-align: center">"Your progress is our progress"</p>
                <br>
                <div style="text-align: center">
                    <a href="{{url('login')}}" class="button is-success"><b>Ingresar</b></a>

                    @if($isAdministrator==1)
                        <!-- Nothing -->
                    @else
                        <a href="{{url('register')}}" class="button is-warning"><b>Registrar Administrador</b></a>
                    @endif
                    
                </div>
                
            </div>

            <div style="text-align: center">
                Desarrollado por <a>Ing. Jhon Medina</a><br><br>
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