@extends('layouts.base-admin')

@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{url('/home')}}">Piece Of Cake</a></li>
    <li><a href="#">Institución</a></li>
    <li class="is-active"><a href="#" aria-current="page">Crear Institución</a></li>
  </ul>
</nav>

<div>
	<h3 class="title is-3">
		Crear Institución
	</h3>

	<div class="columns">
		<div class="column">
			<form method="POST" action="{{url('school/save')}}">
			@csrf
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Nombre de la Institución:</b></label>
			    <input class="input" type="text" name="name" placeholder="Ingresar nombre de la Institución">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Número:</b></label>
			    <input class="input" type="text" name="number" placeholder="Ingresar número">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Formato de la Institución:</b></label>
			    <div class="select" style="width: 100%">
			      <select class="input" name="format">
			      	<option selected disabled>Elegir</option>
			        <option value="JEC">Jornada Escolar Completa</option>
			        <option value="JES">Jornada Escolar Simple</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>* Localidad:</b></label>
			    <input class="input" name="location" type="text" placeholder="Ingresar Localidad">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Unidad de Gestión Educativa Local:</b></label>
			    <input class="input" name="ugel" type="text" placeholder="Ingresar UGEL">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			  	<label class="label"><b>Dirección Regional de Educación:</b></label>
			    <input class="input" name="dre" type="text" placeholder="Ingresar DRE">
			  </div>
			</div>
			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-dark">Registrar Institución</button>
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
							Los campos con asterisco (*) son de suma importancia, por eso se debe priorizar en el llenado de estos campos para que se pueda Registrar la Institución correctamente.
						</li>
						<br>
						<li>
							Colocar los nombres de la Institución correctamente evitando posibles correcciones despues de registrado sus datos correspondientes, asi mismo el nombre de UGEL y de DRE, entre otros.
						</li>

					</ul>				
				</div>
				
				
			</div>
		</div>
	</div>
</div>

@endsection