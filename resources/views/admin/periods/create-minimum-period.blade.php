@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="{{url('/period/list')}}">Periodos</a></li>
    <li class="is-active"><a href="#" aria-current="page">Nuevo Periodo Mínimo</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Nuevo Periodo Mínimo
	</h3>

	<div class="columns ">
		<div class="column is-three-fifths">
			<form method="POST" action="{{url('period/minimum/save')}}">
			@csrf
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Año:</b></label>
			    <input class="input" type="text" disabled value="{{$year['year']}}">
			    <input type="hidden" name="year" value="{{$year['id']}}">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Nombre del Periodo Mínimo:</b></label>
			    <input class="input" name="minimum_period_name" type="text" placeholder="Ingresar Nombre del Periodo Mínimo">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Orden:</b></label>
			    <input class="input" name="order" type="number" placeholder="Ingresar Tamaño del Rango">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Rango:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="range">
			      	<option selected disabled>Elegir</option>
			        <option value="Mes">Mes</option>
			        <option value="Semana">Semana</option>
			        <option value="Día">Día</option>
			        
			      </select>
			    </div>
			  </div>
			</div>
			
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Tamaño de Rango:</b></label>
			    <input class="input" name="size_range" type="number" placeholder="Ingresar Tamaño del Rango">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Fecha de Inicio:</b></label>
			    <input class="input" name="start" type="date" placeholder="Ingresar Fecha de Inicio">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Fecha de Termino:</b></label>
			    <input class="input" name="end" type="date" placeholder="Ingresar Fecha de Termino">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-dark">Registrar Periodo Mínimo</button>
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