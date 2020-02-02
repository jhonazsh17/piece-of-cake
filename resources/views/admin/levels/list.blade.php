@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/level/list')}}">Grados</a></li>
    <li class="is-active"><a href="#" aria-current="page">Lista de Grados</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Lista de Grados
	</h3>

	<div class="columns ">
		<div class="column is-four-fifths">
			<table class="table is-bordered" style="width: 100%">	
				<thead>
					<tr>
						<th style="text-align: center">N°</th>
						<th style="text-align: center">Nivel Educativo</th>
						<th style="text-align: center">Grado</th>
						<th style="text-align: center">Sección</th>
					</tr>
				</thead>
				<tbody>	
					<?php $i=0; ?>
					@if(count($levels)>0)
						@foreach($levels as $level)
							<tr >
								<td style="text-align: center">{{$i=$i+1}}</td>
								<td style="text-align: center">{{$level->level_name}}</td>
								<td style="text-align: center">{{$level->grade}} °</td>
								<td style="text-align: center">"{{$level->section}}"</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="4" style="text-align: center">
								No se han registrado <b>Grados</b> aun. Dar <a href="{{url('level/create')}}">Click Aquí</a> para registrar un Nuevo Grado.
							</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div class="column">
			<a class="button is-warning is-fullwidth" href="{{url('level/create')}}"><span class="icon-list-numbered"></span>&nbsp; Nuevo Grado</a>
		</div>
		
	</div>
</div>

@endsection