@extends('layouts.base-home')

@section('css')

@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page"><img src="{{asset('img/png/units-and-sessions.png')}}" width="28px"> &nbsp;&nbsp;Units and Sessions</a></li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    Units and Sessions
                </h2>
                <p>
                    This is The List of Units and Sessions.
                </p>
            </div>
        </div>

        <div class="columns">
            <div class="column is-four-fifths">
                <table class="table is-fullwidth is-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center">N°</th>
                            <th style="text-align: center">Level</th>
                            <th style="text-align: center">Unit</th>
                            <th style="text-align: center">Sessions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>

                        @if(count($unitsArray)>0)

                            @foreach($unitsArray as $unit)
                            <tr>
                                <td style="vertical-align: middle; text-align: center" rowspan="{{$unit['unit']}}">
                                    {{$i=$i+1}}
                                </td>
                                <td style="vertical-align: middle; text-align: center">
                                    {{$unit['level']->level_name}} / {{$unit['level']->grade}}° "{{$unit['level']->section}}"
                                </td>
                                <td style="vertical-align: middle; text-align: center">
                                    <b>Unit {{$unit['unit']['order_of_unit']}}</b>: {{$unit['unit']['title']}} 
                                </td>
                                <td>
                                    <table>
                                        @foreach($unit['unit']->sessions as $session)
                                            <tr>
                                                <td>
                                                    <b>Session {{$session['order_of_session']}}</b>: {{$session['title']}}
                                                </td>
                                                <td>
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
                                    </table>
                                </td>
                            </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="4" style="text-align: center">
                                    No Units and Sessions
                                </td>
                            </tr> 
                        @endif        
                        
                    </tbody>
                </table>    
            </div>
            <div class="column">
                <a href="{{url('unit/create')}}" class="button is-fullwidth is-warning"><span class="icon-plus"></span> &nbsp;Add New Unit</a>
                @if(count($unitsArray)>0)
                    <a href="{{url('session/create')}}" class="button is-fullwidth is-warning" style="margin-top: .5em"><span class="icon-plus"></span> &nbsp;Add New Session</a>
                @else
                    <a href="{{url('session/create')}}" class="button is-fullwidth is-warning" style="margin-top: .5em" disabled><span class="icon-plus"></span> &nbsp;Add New Session</a>
                @endif
            </div>
        </div>
        
        <br>
@endsection