@extends('layouts.base-home')

@section('content')
    <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/session')}}/{{$session->id}}/exams">Sesión {{$session->order_of_session}}: {{$session->title}}</a></li>
            <li class="is-active"><a href="#" aria-current="page">Exams</a></li>
          </ul>
        </nav>

    <div class="columns">
            <div class="column">
                <h3 class="title is-3">
                    Sesión {{$session->order_of_session}}: {{$session->title}}
                </h3>
                <h5 class="subtitle is-5">
                    Unidad {{$session->unit['order_of_unit']}}: {{$session->unit['title']}}
                </h5>
                <table class="table is-bordered is-fullwidth">
                    <thead>
                        <tr>
                            <th colspan="4" style="text-align: center">LISTA DE EXÁMENES DE LA SESIÓN</th>
                        </tr>
                        <tr>
                            <th style="text-align: center">N°</th>
                            <th style="text-align: center">Descripción del Exámen</th>
                            <th style="text-align: center">Estado</th>
                            <th style="text-align: center">Tu Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($array)>0)
                            <?php $i=0; ?>
                            @foreach($array as $exam)
                            <tr>
                                <td style="width: 20px; vertical-align: middle;">
                                    {{$i=$i+1}}
                                </td>
                                <td style="vertical-align: middle;">
                                    <a href="{{url('session')}}/{{$session['id']}}/exam/{{$exam['id']}}">
                                        Exam {{$exam['order_of_evaluation']}} @if($exam['title']!=""): {{$exam['title']}}@endif
                                    </a>
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    @if($exam['state'])
                                        @if($exam['state']==1)
                                            <span class="tag is-dark">Terminado</span>
                                        @else
                                            <span class="tag is-success">Pendiente</span>
                                        @endif
                                    @else
                                        <span class="tag is-light">No Questions</span> 
                                    @endif
                                </td>
                                <td style="vertical-align: middle; text-align: center">
                                    @if($exam['note'])
                                        @if($exam['note']<=10)
                                            <span class="tag"><b style="font-size: 1.2em; color: red">{{$exam['note']}}</b></span>
                                        @else
                                            <span class="tag"><b style="font-size: 1.2em; color: blue">{{$exam['note']}}</b></span>
                                        @endif
                                    
                                    @else
                                    <span class="tag is-light">No Note</span> 
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td style="text-align: center; color: #ccc" colspan="4">
                                    Aún no hay Exámenes en esta Sesión.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <br>
                
            </div>
        </div>
@endsection
