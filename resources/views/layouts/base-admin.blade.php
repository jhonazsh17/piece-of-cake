<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Piece Of Cake v0.1</title>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    @yield('css')    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style type="text/css">
        .column-customize{
            padding: 0px 15px;
        }
        .box-button:hover{
            cursor: pointer;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    
    <div class="main-heading"  style="background: url('/img/portadas/una.jpg'); padding-bottom: 10px" >
        <div class="inner-heading" style="background: #feffbdeb; ">
            
        
        <div class="container" >
            <div class="columns">
                <div class="column is-three-fifths">
                    <br>
                    <h2 class="title is-2">Piece Of Cake v0.1 <span><img src="{{asset('img/piece.png')}}" style="width: 48px" /></span></h2>
                    <h2 class="subtitle">Administración del contenido.</h2>
                </div>

                <div class="column">
                    <br>    
                    
                </div>
                <div class="column">
                    <br>
                   
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="columns">
                <div class="column">
                    <a href="{{url('/home')}}" class="button is-success">
                        <b><span class="icon-home"></span>&nbsp;Panel Principal</b>
                    </a>
                    <!-- <a href="{{url('/help')}}" class="button is-default">Help</a> -->
                </div>
                <div class="column"></div>
                <div class="column" style="text-align: right;">
                        @guest
                            <!-- Nothing -->
                        @else
                           <div class="dropdown" id="dropdown-user" style="text-align: left">
                              <div class="dropdown-trigger">
                                <button class="button is-warning" aria-haspopup="true" aria-controls="dropdown-menu"  onclick="userMenu()">
                                  <b><span class="icon-user"></span>&nbsp; {{ Auth::user()->name }} </span></b>&nbsp;&nbsp;
                                  <span class="icon-chevron-down"></span>
                                </button>
                              </div>
                              <div class="dropdown-menu " id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                  <div class="dropdown-item">
                                    <p>
                                        {{ Auth::user()->name }} <br>
                                        <small>
                                            @if(Auth::user()->role=="Administrator")
                                                Administrador
                                            @endif
                                        </small>
                                    </p>
                                    
                                  </div>
                                  
                                  <hr class="dropdown-divider">
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="icon-exit"></span> Salir
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                              </div>
                            </div>
                            
                          
                        @endguest
                </div>
            </div>
        </div>
        </div>
    </div>
    

    <div class="container" id="main">
        <br><br><br><br><br><br><br><br>
        @yield('content')

        
        
    </div>
    
    <hr>
    <footer class="container">
        <div class="columns">
            <div class="column" style="text-align: center">
                Desarrollado por <a>Ing. Jhon Medina</a>
                <br><br>
            </div>
        </div>
        

    </footer>
    
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script>
        banderaClick = 0;
        function userMenu(){
            if(banderaClick==0){
                document.getElementById('dropdown-user').classList.add("is-active");
                banderaClick=1;
            }else{
                document.getElementById('dropdown-user').classList.remove("is-active");
                banderaClick=0;
            }
            
        }
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    
</body>
</html>
