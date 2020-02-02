@extends('layouts.base-admin')

@section('content')
<br>
	<div class="columns">
		<div class="colum column-customize">
			<div class="box box-button has-text-centered">
				<a href="{{url('school/create')}}">
					<img src="{{asset('img/png/school.png')}}" style="max-width: 150px; height: 150px">
		  			<h5 class="title is-5">INSTITUCIÓN</h5>
				</a>
		  		
			</div>
		</div>
		<div class="colum column-customize">
			<div class="box box-button has-text-centered">
				<a href="{{url('user/list')}}">
					<img src="{{asset('img/png/users.png')}}" style="max-width: 150px; height: 150px">
		  			<h5 class="title is-5">USUARIOS</h5>
				</a>
			</div>
		</div>
		<div class="colum column-customize">
			<div class="box box-button has-text-centered">
				<a href="{{url('level/list')}}">
					<img src="{{asset('img/png/level.png')}}" style="max-width: 150px; height: 150px">
		  			<h5 class="title is-5">GRADOS</h5>
				</a>
			</div>
		</div>
		<div class="colum column-customize">
			<div class="box box-button has-text-centered">
				<a href="{{url('period/list')}}">
					<img src="{{asset('img/png/periodos.png')}}" style="max-width: 150px; height: 150px">
		  			<h5 class="title is-5">PERIODOS</h5>
				</a>
			</div>
		</div>
		<div class="colum column-customize">
			<div class="box">
		  		
			</div>
		</div>
	</div>
	<br>
	
@endsection