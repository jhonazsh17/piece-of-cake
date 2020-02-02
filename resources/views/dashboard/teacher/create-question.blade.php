@extends('layouts.base-home')

@section('css')
    <!-- <style type="text/css">
        .column-customize{
            padding: 0px 15px;
        }
        .box-button:hover{
            cursor: pointer;
            background-color: #f8f8f8;
        }
    </style> -->
@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/evaluation')}}/exams">Exams</a></li>
            <li><a href="{{url('/eval/uation')}}/{{$evaluation->id}}">
                Exam {{$evaluation->order_of_evaluation}} @if($evaluation->title!=""): {{$evaluation->title}} @endif
            </a></li>
            <li class="is-active"><a href="#" aria-current="page">Create Question</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    Create Question
                </h2>
                
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <form method="POST" action="{{url('/evaluation')}}/{{$evaluation->id}}/question/save">
                    @csrf
                    
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Question Description:</b></label>
                        <textarea class="textarea" rows="5" cols="30" name="question_description"></textarea>
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>Instruction:</b></label>
                        <input class="input" name="question_instruction" type="text" placeholder="Put the Instruction">
                      </div>
                    </div>

                    <label><b>* Options</b></label>
                    <table class="table is-bordered" style="margin-top: .5em">
                        <thead>
                            <tr>
                                <th style="width: 550px">
                                    Option
                                </th>
                                <th style="width: 450px">
                                    Instruction
                                </th>
                                <th style="width: 150px">
                                    Correct Answer
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >
                                    <input class="input" type="text" name="opcion1" placeholder="Option 1" >
                                </td>
                                <td>
                                    <input class="input" type="text" name="inst1" placeholder="Instruction 1" >
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-1" name="op1" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="text" name="opcion2" placeholder="Option 2" >
                                </td>
                                <td>
                                    <input class="input" type="text" name="inst2" placeholder="Instruction 2" >
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-2" name="op2" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="text" name="opcion3" placeholder="Option 3" >
                                </td>
                                <td>
                                    <input class="input" type="text" name="inst3" placeholder="Instruction 3" >
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-3" name="op3" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="text" name="opcion4" placeholder="Option 4" >
                                </td>
                                <td>
                                    <input class="input" type="text" name="inst4" placeholder="Instruction 4" >
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-4" name="op4" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="text" name="opcion5" placeholder="Option 5" >
                                </td>
                                <td>
                                    <input class="input" type="text" name="inst5" placeholder="Instruction 5" >
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-5" name="op5" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="field">
                      <div class="control">
                        <input class="button is-dark" type="submit" value="Save Question">
                      </div>
                    </div>
                </form>
            </div>
             
            </div>
        </div>
        
        <br>
@endsection

@section('scripts')
    <script type="text/javascript">
        function checkOnOff(id){
            for(let i=1; i<=5; i++){
                if(id=="option-"+i){
                    document.getElementById(id).checked = true;
                }else{
                    document.getElementById('option-'+i).checked = false;
                }
                
            }
        }
    </script>
@endsection