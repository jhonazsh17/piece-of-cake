@extends('layouts.base-home')

@section('content')
<div class="columns">
            <div class="column">
                <h3 class="title is-3" style="text-align: center">
                    @if($nota<=5)
                        ¡Pésimo <span style="color: green">{{ Auth::user()->name }}</span>, un mal resultado!
                    @elseif($nota>5 and $nota<10.5)
                        ¡Esto debe mejorar <span style="color: green">{{ Auth::user()->name }}</span>, debes obtener un mejor resultado luego!
                    @elseif($nota>=10.5 and $nota<15)
                        ¡Bien <span style="color: green">{{ Auth::user()->name }}</span>, pero aún debes esforzarte más!
                    @elseif($nota>=15 and $nota<=17)
                        ¡Vas muy bien <span style="color: green">{{ Auth::user()->name }}</span>, es un buen resultado!
                    @else
                        ¡Eres Genial <span style="color: green">{{ Auth::user()->name }}</span>, un excelente resultado!
                    @endif
                </h3>
                
                <p style="text-align: center">El resultado de esta prueba de conocimiento de Inglés, es importante para que el Profesor te evalue.</p>
                <br>
                <div class="columns">
                    <div class="column">
                        <h2 class="subtitle" style="text-align: center"><b>Tu nota es:</b></h2>
                        <div style="margin: 0 auto;width: 150px; height: 150px; border-radius: 50%; background: yellow; text-align: center; font-size: 3em; color: black; vertical-align: middle; padding: 30px 0px; font-weight: bold; box-shadow: 0px 0px 7px 0px #b5b5b5;">
                            {{$nota}}
                        </div>
                    </div>
                    <div class="column">
                        <h2 class="subtitle" style="text-align: center"><b>Preguntas:</b></h2>
                        <div style="margin: 0 auto;width: 150px; height: 150px; border-radius: 50%; background: white; text-align: center; font-size: 3em; color: black; vertical-align: middle; padding: 30px 0px; font-weight: bold; box-shadow: 0px 0px 7px 0px #b5b5b5;">
                            {{$cantidad}}
                        </div>
                    </div>
                    <div class="column">
                        <h2 class="subtitle" style="text-align: center"><b>Correctas:</b></h2>
                        <div style="margin: 0 auto;width: 150px; height: 150px; border-radius: 50%; background: #00d1b2; text-align: center; font-size: 3em; color: black; vertical-align: middle; padding: 30px 0px; font-weight: bold; box-shadow: 0px 0px 7px 0px #b5b5b5;">
                            {{$sum}}
                        </div>
                    </div>
                    <div class="column">
                        <h2 class="subtitle" style="text-align: center"><b>Incorrectas:</b></h2>
                        <div style="margin: 0 auto;width: 150px; height: 150px; border-radius: 50%; background: #ffd83d; text-align: center; font-size: 3em; color: black; vertical-align: middle; padding: 30px 0px; font-weight: bold; box-shadow: 0px 0px 7px 0px #b5b5b5;">
                            {{$resta}}
                        </div>
                    </div>
                    
                    
                </div>
                <br>
                
                
            </div>

            
        </div>

        <div class="columns">
                
                <div class="column">
                    
                </div>
                <div class="column is-two-fifths" style="text-align: center">
                    <a href="{{url('grafico/user')}}/{{Auth::user()->id}}" class="button is-dark"><b>Ver Gráfico de Avance</b></a>

                    <a href="{{url('answers/eval')}}/{{$idEval}}/user/{{Auth::user()->id}}" class="button is-warning"><b>Ver mis Respuestas</b></a>
                </div>
                <div class="column">
                    
                </div>
            </div>
@endsection
