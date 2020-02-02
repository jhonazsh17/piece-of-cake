@extends('layouts.base-home')

@section('css')

@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/evaluation')}}/exams">Exams</a></li>
            <li class="is-active"><a href="#" aria-current="page">Exam {{$evaluation->order_of_evaluation}} @if($evaluation->title!=""): {{$evaluation->title}} @endif</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    Exam {{$evaluation->order_of_evaluation}} @if($evaluation->title!=""): {{$evaluation->title}} @endif
                </h2>
                <p>
                    These are The Questions of Exam {{$evaluation->order_of_evaluation}} @if($evaluation->title!=""): {{$evaluation->title}} @endif
                </p>
            </div>
        </div>

        <div class="columns">
            <div class="column is-four-fifths">
                <table class="table is-fullwidth is-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center">N°</th>
                            <th style="text-align: center">Question Description</th>
                            <th style="text-align: center">Question Instruction</th>
                            <th style="text-align: center; width: 300px">Options of Question</th>
                            <th style="text-align: center; width: 100px">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>
                        @if(count($questionsArray)>0)
                            @foreach($questionsArray as $question)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{$i=$i+1}}
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <b>Question</b>:<a href=""> {{$question['question_description']}}</a>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <span style="color: #a6a6a6">{{$question['question_instruction']}}</span>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <ul style="margin-top: 0">
                                                @foreach($question['options'] as $option)
                                                    <li>
                                                        <a href="">{{$option->option_description}}</a> @if($option->is_correct==1) (<b style="color: green">Is Correct</b>) @endif<br>
                                                        <button class="button is-small"><span class="icon-pencil2"></span> Edit</button> <button class="button is-small"><span class="icon-bin"></span> Delete</button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <div class="field has-addons">
                                          <p class="control">
                                            <a class="button is-small">
                                              <span class="icon is-small">
                                                <span class="icon-pencil2"></span>
                                              </span>
                                              <span>Editar</span>
                                            </a>
                                          </p>
                                          <p class="control">
                                            <a class="button is-small">
                                              <span class="icon is-small">
                                                <span class="icon-bin"></span>
                                              </span>
                                              <span>Eliminar</span>
                                            </a>
                                          </p>
                                          
                                        </div>
                                    </td>
                                </tr>
                            @endforeach 

                        @else
                            <tr>
                                <td colspan="5" style="text-align: center">
                                    No Questions.
                                </td>
                            </tr>
                        @endif                       
                    </tbody>
                </table>
            </div>
            <div class="column">
                <a  href="{{url('evaluation')}}/{{$evaluation->id}}/question/create" class="button is-fullwidth is-warning">
                    + New Question
                </a>
            </div>
        </div>
        
        <br>
@endsection