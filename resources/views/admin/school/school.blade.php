@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/school/data')}}">Institución</a></li>
    <li class="is-active"><a href="#" aria-current="page">Datos</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Datos
	</h3>

	<div class="columns">
		<div class="column">
			<table class="table is-bordered" style="width: 100%">	
				
				<tbody>	
					<tr>
						<td><b>INSTITUCIÓN:</b></td>
						<td>{{$school->name}}</td>
					</tr>
					<tr>
						<td><b>NÚMERO:</b></td>
						<td>{{$school->number_school}}</td>
					</tr>
					<tr>
						<td><b>LOCALIDAD:</b></td>
						<td>{{$school->location}}</td>
					</tr>
					<tr>
						<td><b>FORMATO DE INSTITUCIÓN:</b></td>
						<td>{{$school->format}}</td>
					</tr>
					<tr>
						<td><b>UGEL:</b></td>
						<td>{{$school->ugel_dep}}</td>
					</tr>
					<tr>
						<td><b>DRE:</b></td>
						<td>{{$school->dre_dep}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="column ">
			<p>
				La Institución Educativa <b>{{$school->name}}</b> - <b>{{$school->number_school}}</b> ubicada en la Localidad de <b>{{$school->location}}</b> pertenece a la Unidad de Gestión Educativa Local <b>{{$school->ugel_dep}}</b>, la cual a su vez pertenece a la Dirección Regional de Educación <b>{{$school->dre_dep}}</b>.
			</p>
			<br>

			<p>
				Esta es una de las Instituciones que pertenece al formato
				@if($school->format=="JEC")
					<b>Jornada Escolar Completa</b>, el cual es bastante incisivo en el aprendizaje del Idioma Inglés.
				@else
					<b>Jornada Escolar Simple</b>.
				@endif
			</p>
			<br>
			<button class="button is-warning">
				Editar Datos
			</button>
			
			
		</div>
	</div>
</div>

@endsection