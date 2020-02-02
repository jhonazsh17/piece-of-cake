@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/level/list')}}">Grados</a></li>
    <li class="is-active"><a href="#" aria-current="page">Nuevo Grado</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Nuevo Grado
	</h3>

	<div class="columns ">
		<div class="column is-three-fifths">
			<form method="POST" action="{{url('level/save')}}">
			@csrf
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Nivel Educativo:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="name">
			      	<option selected disabled>Elegir</option>
			        <option value="Primaria">Primaria</option>
			        <option value="Secundaria">Secundaria</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Grado:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="grade">
			      	<option selected disabled>Elegir</option>
			        <option value="1">1°</option>
			        <option value="2">2°</option>
			        <option value="3">3°</option>
			        <option value="4">4°</option>
			        <option value="5">5°</option>
			        <option value="6">6°</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Sección:</b></label>
			    <input class="input" name="section" type="text" placeholder="Ingresar Sección">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-dark">Registrar Grado</button>
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
							Los campos con asterisco (*) son de suma importancia, por eso se debe priorizar en el llenado de estos campos para que se pueda Registrar el Grado correctamente.
						</li>
						<br>
						<li>
							Escribir una letra para la correspondiente sección, de acuerdo a las secciones que tenga la Institución en el Grado al que pertenece.
						</li>

					</ul>				
				</div>
				
				
			</div>
		</div>
		
	</div>
</div>

@endsection