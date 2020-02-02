@extends('layouts.base-home')

@section('css')
   
@endsection

@section('content')
        <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li>
                <a href="{{url('/student/list')}}">
                    <img src="{{asset('img/png/students.png')}}" width="28px"> &nbsp;&nbsp;My Students
                </a>
            </li>
            <li class="is-active">
                <a href="#" aria-current="page">
                    My Students of {{$level->level_name}} / {{$level->grade}}° "{{$level->section}}"
                </a>
            </li>
          </ul>
        </nav>

        <div class="columns">
            <div class="column">
                <h2 class="title">
                    My Students of {{$level->level_name}} / {{$level->grade}}° "{{$level->section}}"
                </h2>
                <p>
                    This is The list of Grade.
                </p>
                <br>

                <table class="table is-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle;" rowspan="2">N°</th>
                            <th style="text-align: center; vertical-align: middle;" rowspan="2">DNI</th>
                            <th style="text-align: center; vertical-align: middle;" rowspan="2">Student</th>
                            <th style="text-align: center;" colspan="{{count($arrayEvaluations)}}">Notes</th>
                        </tr>
                        <tr>
                            @foreach($arrayEvaluations as $evaluation)
                                <th style="font-size: 9px; font-weight: normal;">
                                    {{$evaluation['title']}}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <?php $j=0; ?>

                        @if(count($arrayStudents)>0)
                            @foreach($arrayStudents as $item)
                            <tr>
                                <td style="vertical-align: middle; text-align: center">
                                    {{$j=$j+1}}
                                </td>
                                <td style="vertical-align: middle;">
                                    <span class="tag"><b>{{$item['student']['dni']}}</b></span>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a href="">{{$item['student']['name']}}</a>
                                </td>


                                <?php
                                   $notes = json_decode($item['notes']);
                                    for($i=0; $i<count($arrayEvaluations); $i++){
                                        
                                        if($notes[$i]!=""){
                                            if($notes[$i]>10){
                                                echo "<td style='vertical-align: middle; text-align: center'><span class='tag' style='color:blue; font-weight: bold; font-size: .9em'>".$notes[$i]."</span></td>";
                                            }else if($notes[$i]==10){
                                                echo "<td style='vertical-align: middle; text-align: center'><span class='tag' style='color:red; font-weight: bold; font-size: .9em'>".$notes[$i]."</span></td>";
                                            }else{
                                                echo "<td style='vertical-align: middle; text-align: center'><span class='tag' style='color: red; font-weight: bold; font-size: .9em'>0".$notes[$i]."</span></td>";
                                            }
                                        }else{
                                            echo "<td></td>";
                                        }
                                        
                                    }
                                ?>
                                        
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
            </div>
        </div>
        
        <br>
@endsection