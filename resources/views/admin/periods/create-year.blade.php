@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/period/list')}}">Periodos</a></li>
    <li class="is-active"><a href="#" aria-current="page">Nuevo Año de Aprendizaje</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Nuevo Año de Aprendizaje
	</h3>

	<div class="columns ">
		<div class="column is-three-fifths">
			<form method="POST" action="{{url('period/year/save')}}">
			@csrf
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Año:</b></label>
			    <input class="input" name="year" type="text" placeholder="Ingresar Año">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Nombre del Año:</b></label>
			    <input class="input" name="year_name" type="text" placeholder="Ingresar Nombre del Año">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-dark">Registrar Año de Aprendizaje</button>
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
						

					</ul>				
				</div>
				
				
			</div>
		</div>
		
	</div>
</div>

@endsection