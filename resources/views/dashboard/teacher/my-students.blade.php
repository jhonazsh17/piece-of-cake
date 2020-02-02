@extends('layouts.base-home')

@section('css')
   
@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li class="is-active">
                <a href="#" aria-current="page">
                    <img src="{{asset('img/png/students.png')}}" width="28px"> &nbsp;&nbsp;My Students
                </a>
            </li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    My Students
                </h2>
                <p>
                    This is The list of Grade.
                </p>
            </div>
        </div>
        <table class="table is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th style="text-align: center">N°</th>
                    <th style="text-align: center">Level / Grade and Section</th>
                    <th style="text-align: center">Total Students</th>
                    <th style="text-align: center">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>

                @if(count($array)>0)
                    @foreach($array as $level)
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">{{$i=$i+1}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="{{url('/students/for')}}/{{$level['id']}}/level">{{$level['level_name']}} / {{$level['grade']}}° "{{$level['section']}}"</a>
                            </td>
                            
                            <td style="text-align: center; vertical-align: middle;">
                                <span class="tag is-light is-medium"><b>{{count($level['users'])}}</b> &nbsp;&nbsp;Student(s)</span>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a class="button is-small" href="{{url('/students/for')}}/{{$level['id']}}/level"><b><span class="icon-eye"></span> &nbsp;Ver</b></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" style="text-align: center">
                            No Students
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        <br>
@endsection