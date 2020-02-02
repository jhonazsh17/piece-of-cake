@extends('layouts.base-home')

@section('css')
    <style type="text/css">
        .column-customize{
            padding: 0px 15px;
        }
        .box-button:hover{
            cursor: pointer;
            background-color: #f8f8f8;
        }
    </style>
@endsection

@section('content')

<div class="columns">
            @if(Auth::user()->role=="Teacher")
            <div class="colum column-customize">
                <div class="box box-button has-text-centered">
                    <a href="{{url('student/list')}}">
                        <img src="{{asset('img/png/students.png')}}">
                        <h6 class="title is-6">MY STUDENTS</h6>
                    </a>
                </div>
            </div>
            <div class="colum column-customize">
                <div class="box box-button has-text-centered">
                    <a href="{{url('unit-and-session/list')}}">
                        <img src="{{asset('img/png/units-and-sessions.png')}}">
                        <h6 class="title is-6">UNITS AND SESSIONS</h6>
                    </a>
                </div>
            </div>
            <div class="colum column-customize">
                <div class="box box-button has-text-centered">
                    <a href="{{url('evaluation')}}/exams">
                        <img src="{{asset('img/png/exams.png')}}">
                        <h6 class="title is-6">EXAMS</h6>
                    </a>
                </div>
            </div>
            <div class="colum column-customize">
                <div class="box box-button has-text-centered">
                    <a href="#">
                        <img src="{{asset('img/png/practices.png')}}">
                        <h6 class="title is-6">PRACTICES</h6>
                    </a>
                </div>
            </div>
            <div class="colum column-customize">
                <div class="box box-button has-text-centered">
                    <a href="#">
                        <img src="{{asset('img/png/games.png')}}">
                        <h6 class="title is-6">GAMES</h6>
                    </a>
                </div>
            </div>

            @else
                <div class="column">
                    <div style="padding: .4em 0; border: 1px solid #b4b4b4; border-radius: 50%; width: 80px; height: 80px; margin: 0 auto; text-align: center; font-size: 2em; font-weight: bold; ">
                        
                        @if($average<=10)
                            <span style="color: red">{{$average}}</span>
                        @else
                            <span style="color: blue">{{$average}}</span>
                        @endif
                    </div>
                    <div style="text-align: center">
                        <b>Mi Promedio General</b>
                    </div>
                </div>
                <div class="column is-four-fifths" style="border-left: 1px solid #eee">
                    <br>
                    <h5 class="title is-5" style="margin-bottom: .5em"><b>Mi Porcentaje de Progreso</b></h5>
                    <progress class="progress is-success" value="{{$calification}}" max="100" style="margin-bottom: .5em">{{$calification}}%</progress>
                    <div class="columns">
                        <div class="column is-three-fifths">
                            <a href="{{url('grafico/user')}}/{{Auth::user()->id}}">Ver Gráfico</a>
                            -
                            <a href="{{url('orden/user')}}/{{Auth::user()->id}}">Orden de Mérito</a>
                        </div>
                        <div class="column" style="text-align: right;">
                            <b>{{$calification}} %</b>  
                        </div>
                        
                    </div>
                </div>
            @endif           
            
        </div>
        <hr>

        @if(Auth::user()->role=="Teacher")
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        @else
            <div class="columns">
                <div class="column">
                    <h2 class="title">
                        My Principal List 
                    </h2>
                    <p>
                        This is my principal list for learning.
                    </p>
                </div>
            </div>
            <table class="table is-fullwidth is-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center">N°</th>
                        <th style="text-align: center">Unidad</th>
                        <th style="text-align: center; width: 700px">Sesiones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @if(count($arrayUnits)>0)
                    @foreach($arrayUnits as $unit)
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">
                               {{$i=$i+1}} 
                            </td>
                            <td style="vertical-align: middle; text-align: center;">
                                <b>Unit {{$unit['order']}}</b>: <a href="">{{$unit['title']}}</a>
                            </td>
                            <td>
                                <table>
                                    @foreach($unit['sessions'] as $session)
                                        <tr>
                                            <td style="vertical-align: middle; width: 400px"><b>Session {{$session['order_of_session']}}</b>: <a href="{{url('session')}}/{{$session->id}}/exams">{{$session['title']}}</a></td>
                                            <td style="vertical-align: middle; width: 300px">
                                                <ul>
                                                    @if(count($session['evaluations'])>0)
                                                    @foreach($session['evaluations'] as $evaluation)
                                                            <li><b>Exam {{$evaluation->order_of_evaluation}}</b>: <a href="{{url('session')}}/{{$session->id}}/exam/{{$evaluation->id}}">{{$evaluation->title}}</a></li>
                                                        
                                                    @endforeach

                                                    @else
                                                        <span style="color: #bbb">No Evaluations</span>
                                                    @endif
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                            
                        </tr>
                    @endforeach

                    @else
                        <tr>
                            <td colspan="3" style="text-align: center">
                                No hay Unidades Aún.
                            </td>
                        </tr>
                    @endif
                    
                </tbody>
            </table>
        @endif
        <br>
@endsection