@extends('base-home')

@section('content')
<div class="columns">
	<div class="column">
		<h2 class="title is-3">
			1. Ingresar
		</h2>
		<p>
			Debes colocar tus datos correctamente, el Usuario es el numero de DNI del estudiante, asi mismo la contraseña.
		</p>
		<br>
		<img src="{{asset('img/uno.png')}}" style="border: 1px solid #ccc">
		<br><br>

		<h2 class="title is-3">
			2. Panel Home del Estudiante
		</h2>
		<p>
			Aquí se muestra el panel principal del Estudiante, en donde se muestra El promedio Global, El progreso del Estudiante y ademas la lista de Unidades y Sesiones que le pertenece.
		</p>
		<br>
		<img src="{{asset('img/dos.png')}}" style="border: 1px solid #ccc">
		<br><br>

		<h2 class="title is-3">
			3. Ir a lista de Exámenes
		</h2>
		<p>
			Para ir a ls lista de Exámenes a Desarrollar, se tiene que ir primero a la Lista Principal de Unidades y Sesiones, que se muestra en el Panel Home del Estudiante, Hacer clic en una Sesión y luego se muestran todos los exámenes disponibles para esa Sesión.
		</p>
		<br>
		<img src="{{asset('img/tres.png')}}" style="border: 1px solid #ccc; width: 49.8%; display: inline-block;">
		<img src="{{asset('img/cuatro.png')}}" style="border: 1px solid #ccc; width: 49.8%; display: inline-block;">

		<br><br>

		<h2 class="title is-3">
			3. Exámen
		</h2>
		<p>
			Para dar un Exámen se debe hacer clic en la Lista de Exámenes, elegir uno y se mostrará una lista de preguntas de acuerdo al exámen que se elegió. Cada exámen solo tiene 1 intento de desarrollo, asi que el Estudiante deberá ser muy cuidadoso con sus respuestas.
		</p>
		<br>
		<img src="{{asset('img/cinco.png')}}" style="border: 1px solid #ccc;">

		<br><br>

		<h2 class="title is-3">
			3. Salir
		</h2>
		<p>
			Para Salir del aplicativo web, solo se debe dar click en donde aparece el nombre del Estudiante, luego aparece un pequeño menu flotante, en donde se muestra la opción "Salir".
		</p>
		<br>
		<img src="{{asset('img/seis.png')}}" style="border: 1px solid #ccc;">
		
	</div>
</div>
@endsection