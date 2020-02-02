@extends('layouts.base-home')

@section('css')

@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page"><img src="{{asset('img/png/exams.png')}}" width="28px"> &nbsp;&nbsp;Exams</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    Exams
                </h2>
                <p>
                    This is a list of Exams
                </p>
            </div>
        </div>

        <div class="columns">
            <div class="column is-four-fifths">
                <table class="table is-fullwidth is-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center">N°</th>
                            <th style="text-align: center">Session</th>
                            <th style="text-align: center">Exam</th>
                            <th style="text-align: center; width: 100px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($exams)>0)
                        <?php $i=0; ?>
                            @foreach($exams as $exam)
                                <tr>
                                   <td style="text-align: center">
                                       {{$i=$i+1}}
                                   </td> 
                                   <td>
                                       <b>{{$exam->session->title}}</b> [ Unit {{$exam->session->unit['order_of_unit']}}: {{$exam->session->unit['title']}} ]
                                   </td>
                                   <td>
                                       <a href="{{url('/eval/uation')}}/{{$exam->id}}">Exam {{$exam->order_of_evaluation}}
                                        @if($exam->title!="")
                                            : {{$exam->title}}
                                        @else

                                        @endif
                                       </a>
                                   </td>
                                   <td>
                                       <div class="field has-addons">
                                          <p class="control">
                                            <a class="button is-small">
                                              <span class="icon is-small">
                                                <span class="icon-pencil2"></span>
                                              </span>
                                              <span>Edit</span>
                                            </a>
                                          </p>
                                          
                                          <p class="control">
                                            <a class="button is-small">
                                              <span class="icon is-small">
                                                <span class="icon-bin"></span>
                                              </span>
                                              <span>Delete</span>
                                            </a>
                                          </p>
                                          
                                        </div>
                                   </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" style="text-align: center">No Exams</td>
                            </tr>
                        @endif
                        
                    </tbody>
                </table>
            </div>
            <div class="column">
                <a  href="{{url('evaluation')}}/exam/create" class="button is-fullwidth is-warning">
                    + New Exam
                </a>
            </div>
        </div>
        
        <br>
@endsection