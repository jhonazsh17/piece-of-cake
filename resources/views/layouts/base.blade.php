<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Piece Of Cake v0.1</title>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-style.css') }}">
</head>
<body >
    <div class="parent-container" id="parent-container">
    	<div class="parent-inner-container" id="parent-inner-container">
    		<div class="container">
	    		@yield('content')
	    	</div>
    	</div>
    </div>
    @yield('scripts')
    
</body>
</html>