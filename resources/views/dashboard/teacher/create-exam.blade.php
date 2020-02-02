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
            <li class="is-active"><a href="#" aria-current="page">New Exam</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    New Exam
                </h2>
                
            </div>
        </div>

        <div class="columns">
            <div class="column is-three-fifths">
                <form method="POST" action="{{url('/evaluation')}}/exam/save">
                    @csrf
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Sessions:</b></label>
                        <div class="select" style="width: 100%">
                          <select class="input" name="session">
                            <option selected disabled>Choose</option>
                            @foreach($sessions as $session)
                                <option value="{{$session->id}}">Session {{$session->order_of_session}} : {{$session->title}} [ Unit {{$session->unit['order_of_unit']}} {{$session->unit['title']}} ]</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="field">
                      <div class="control">
                        <label class="label"><b>* Type:</b></label>
                        <div class="select" style="width: 100%">
                          <select class="input" name="evaluation">
                            <option selected disabled>Choose</option>
                            <option value="Exam">Exam</option>
                            <option value="Practice">Practice</option>
                            <option value="Game">Game</option>
                          </select>
                        </div>
                      </div>
                    </div> -->
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>Title:</b></label>
                        <input class="input" name="title" type="text" placeholder="Put the Title">
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Order:</b></label>
                        <input class="input" name="order" type="text" placeholder="Put the Order">
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <input class="button is-dark" type="submit" value="Save Exam">
                      </div>
                    </div>
                </form>
            </div>
            <div class="column">
                <div class="box" style="position: fixed; width: 445px; background: #f8f8f8">
                
                <div class="content is-small" >
                    <h6 class="title is-6"><span class="icon-notification"></span> &nbsp;Indicaciones:</h6>
                    
                    <ul>
                        <li>
                            Los campos con asterisco (*) son de suma importancia, por eso se debe priorizar en el llenado de estos campos para que se pueda Registrar el nuevo Usuario correctamente.
                        </li>
                        
                        
                    </ul>               
                </div>
                
                
            </div>    
            </div>
        </div>
        
        <br>
@endsection