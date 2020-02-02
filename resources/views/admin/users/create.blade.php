@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/usuarios/list')}}">Usuarios</a></li>
    <li class="is-active"><a href="#" aria-current="page">Nuevo Usuario</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Nuevo Usuario
	</h3>

	<div class="columns">
		<div class="column">
			<form method="POST" action="{{url('user/register')}}">
			@csrf
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Institución:</b></label>
			    <input class="input" type="text" name="name-school" value="{{$school->number_school}} {{$school->name}}" disabled>
			    <input type="hidden" value="{{$school->id}}" name="school">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Rol:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="role">
			      	<option selected disabled>Elegir</option>
			        <option value="Teacher">Profesor(a)</option>
			        <option value="Student">Estudiante</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Nivel / Grado y Sección:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="level">
			      	<option selected disabled>Elegir</option>
			      	@foreach($levels as $level)			      	
				        <option value="{{$level->id}}">{{$level->level_name}} {{$level->grade}}° "{{$level->section}}"</option>
			        @endforeach
			      </select>
			    </div>
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Nombres y Apellidos:</b></label>
			    <input class="input" name="name" type="text" placeholder="Ingresar Nombres y Apellidos">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* DNI:</b></label>
			    <input class="input" name="dni" type="text" placeholder="Ingresar DNI">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Correo Electrónico:</b></label>
			    <input class="input" name="email" type="email" placeholder="Ingresar Correo Electrónico">
			  </div>
			</div>
			<!-- <div class="field">
			  <div class="control">
			  	<label class="label"><b>* Contraseña:</b></label>
			    <input class="input" name="password" type="password" placeholder="Ingresar Contraseña">
			  </div>
			</div> -->
			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-dark">Registrar Usuario</button>
			  </div>
			</div>
			</form>
		</div>
		<div class="column is-two-fifths">
			<div class="box" style="position: fixed; width: 445px; background: #f8f8f8">
				
				<div class="content is-small" >
					<h6 class="title is-6"><span class="icon-notification"></span> &nbsp;Indicaciones:</h6>
					
					<ul>
						<li>
							Los campos con asterisco (*) son de suma importancia, por eso se debe priorizar en el llenado de estos campos para que se pueda Registrar el nuevo Usuario correctamente.
						</li>
						<br>
						<li>
							Las contraseñas de los Usuarios, se crean automáticamente de forma interna, para Usuarios Estudiantes su DNI es la contraseña, en el caso de los Usuarios Profesores son las Iniciales de sus nombres mas su DNI.
						</li>
						
					</ul>				
				</div>
				
				
			</div>
		</div>
	</div>
</div>

@endsection