@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/level/list')}}">Periodos</a></li>
    <li class="is-active"><a href="#" aria-current="page">Lista de Periodos</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Lista de Periodos
	</h3>
	<b>AÑO DE APRENDIZAJE:</b> 
			<span>
			@if($year)
			{{$year['year']}}
			@else
			No se ha creado este año aun.
			@endif
			</span>
			

			@if($year['year_name']!="")
			<br>
			<b>NOMBRE DEL AÑO DE APRENDIZAJE:</b>
			<span>{{$year['year_name']}}</span>
			@else
			
			@endif
			<br><br>

	<div class="columns ">
		<div class="column is-four-fifths">
			
			<table class="table is-bordered" style="width: 100%">	
				<thead>
					<tr>
						<th style="text-align: center">N°</th>
						<th style="text-align: center">Año de Aprendizaje</th>
						<th style="text-align: center">Nombre del Periodo Mínimo</th>
						<th style="text-align: center">Rango</th>
						<th style="text-align: center">Inicio</th>
						<th style="text-align: center">Fin</th>
						<th style="text-align: center; width: 100px;">Opciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php $i=0; ?>
					@if(count($minimum_periods)>0)
						@foreach($minimum_periods as $period)
							<tr>
								<td style="text-align: center">{{$i=$i+1}}</td>
								<td style="text-align: center">{{$year['year']}}</td>
								<td style="text-align: center">
									{{$period->name}} {{$period->order_period}}
								</td>
								<td style="text-align: center">
									{{$period->size_period}} {{$period->self_period}}
								</td>
								<td style="text-align: center">
									{{$period->start}}
								</td>
								<td style="text-align: center">
									{{$period->end}}
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
									  <!-- <p class="control">
									    <a class="button is-small">
									      <span class="icon is-small">
									        <span class="icon-user-minus"></span>
									      </span>
									      <span>De Baja</span>
									    </a>
									  </p> -->
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
							<td colspan="4" style="text-align: center">
								Aún no hay Periodos Registrados.
							</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div class="column">
			<a class="button is-warning is-fullwidth" href="{{url('period/year/create')}}"> <span class="icon-plus"></span>&nbsp; Nuevo Año de Aprendizaje</a>
			@if(count($years)>0)
				<a class="button is-warning is-fullwidth" href="{{url('period/minimum/create')}}" style="margin-top: .5em"><span class="icon-plus"></span>&nbsp; Nuevo Periodo Mínimo</a>
			@else
				<a class="button is-warning is-fullwidth" href="{{url('period/minimum/create')}}" style="margin-top: .5em" disabled><span class="icon-plus"></span>&nbsp; Nuevo Periodo Mínimo</a>
			@endif
		</div>
		
	</div>
</div>

@endsection