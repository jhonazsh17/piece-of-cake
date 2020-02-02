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
            <li><a href="{{url('/unit-and-session/list')}}">Units and Sessions</a></li>
            <li class="is-active"><a href="#" aria-current="page">New Unit</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    New Unit
                </h2>
                
            </div>
        </div>

        <div class="columns">
            <div class="column is-three-fifths">
                <form method="POST" action="{{url('/unit/save')}}">
                    @csrf
                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Minimum Period:</b></label>
                        <div class="select" style="width: 100%">
                          <select class="input" name="minimum_period">
                            <option selected disabled>Choose the Minimum Period</option>
                            @foreach($periods as $minimum_period)                 
                                <option value="{{$minimum_period->id}}">{{$minimum_period->order_period}} {{$minimum_period->name}} / Start: {{$minimum_period->start}} - End: {{$minimum_period->end}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Level:</b></label>
                        <div class="select" style="width: 100%">
                          <select class="input" name="level">
                            <option selected disabled>Choose the Level</option>
                            @foreach($levels as $level)                 
                                <option value="{{$level->id}}">
                                    {{$level->level_name}} / {{$level->grade}}° "{{$level->section}}"
                                </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <div class="control">
                        <label class="label"><b>* Unit Title:</b></label>
                        <input class="input" name="title" type="text" placeholder="Put the Unit Title">
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
                        <input class="button is-dark" type="submit" value="Save Unit">
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