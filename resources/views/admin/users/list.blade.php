@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/user/list')}}">Usuarios</a></li>
    <li class="is-active"><a href="#" aria-current="page">Lista de Usuarios</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Lista de Usuarios
	</h3>
	<example-component></example-component>

	<div class="columns ">
		<div class="column is-four-fifths">

			<div class="columns">
				<div class="column is-two-fifths">
					<input type="" name="" class="input " placeholder="Buscar Usuario">
				</div>
				<div class="column" style="text-align: right; padding-top: 1em">
					{{count($usersArray)}} Usuarios Registrados&nbsp;&nbsp;
					<button class="button is-light is-small">
						<b>{{count($usersStudents)}} Estudiantes</b>
					</button>
					<button class="button is-light is-small">
						<b>{{count($usersTeachers)}} Profesores</b>
					</button>
					
				</div>
			</div>

			<table class="table is-bordered" style="width: 100%">	
				<thead>
					<tr style="background: #dbdbdb">
						<th style="text-align: center">N°</th>
						<th style="text-align: center">Usuario</th>
						<th style="text-align: center">DNI</th>
						<th style="text-align: center">Nivel</th>
						<th style="text-align: center">Correo</th>
						<th style="text-align: center">Rol</th>
						<th style="text-align: center;width: 100px">Opciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php $i=0; ?>
					@foreach($usersArray as $user)
						@if($user['role']=="Teacher")
						<tr style="background-color: #f6f6f5">
							<td style="text-align: center; vertical-align: middle;">{{$i=$i+1}}</td>
							<td style="vertical-align: middle;"><a href="">{{$user['name']}}</a></td>
							<td style="vertical-align: middle;">{{$user['dni']}}</td>
							<td style="text-align: center; vertical-align: middle;">
								{{$user['level']}}
							</td>
							<td style="vertical-align: middle;">
								<a class="button is-small is-fullwidth is-primary">Agregar Correo</a>
							</td>
							<td style="text-align: center; vertical-align: middle;">
								@if($user['role']=="Administrator")
									Administrador
								@elseif($user['role']=="Teacher")
									Profesor
								@else
									Estudiante
								@endif
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
								        <span class="icon-user-minus"></span>
								      </span>
								      <span>De Baja</span>
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
						@else
						<tr>
							<td style="text-align: center; vertical-align: middle;">{{$i=$i+1}}</td>
							<td style="vertical-align: middle;"><a href="">{{$user['name']}}</a></td>
							<td style="vertical-align: middle;">{{$user['dni']}}</td>
							<td style="text-align: center; vertical-align: middle;">
								{{$user['level']}}
							</td>
							<td style="vertical-align: middle;">
								<a class="button is-small is-fullwidth is-primary">Agregar Correo</a>
							</td>
							<td style="text-align: center; vertical-align: middle;">
								@if($user['role']=="Administrator")
									Administrador
								@elseif($user['role']=="Teacher")
									Profesor
								@else
									Estudiante
								@endif
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
								        <span class="icon-user-minus"></span>
								      </span>
								      <span>De Baja</span>
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
						@endif
					@endforeach
				</tbody>
			</table>

			<div class="columns">
				<div class="column is-three-fifths">
					<b>{{count($usersArray)}} Usuarios</b>
				</div>
				<div class="column" style="text-align: right">
					
				</div>
			</div>
		</div>
		<div class="column">
			<a class="button is-warning is-fullwidth" href="{{url('user/create')}}"><span class="icon-user-plus"></span>&nbsp; Nuevo Usuario</a>
		</div>
		
	</div>
</div>

@endsection