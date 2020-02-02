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
<body >
    {{-- <div id="modal">
        <div id="modal-box">
            <div class="modal-header">
                <div class="columns">
                    <div class="column" style="text-align: left">
                        DATOS DEL ESTUDIANTE
                    </div>
                    <div class="column" style="text-align: right; font-weight: normal; font-family: cursive;">
                        ¡Is a Piece Of Cake!
                    </div>
                </div>
                
            </div>
            <div class="modal-body">
                <label><b>Nombres y Apellidos:</b></label>
                <input class="input" type="text" name="nombres" placeholder="Nombres y Apellidos" style="margin-bottom: .5em" id="name">

                <label><b>DNI:</b></label>
                <input class="input" type="text" id="dni" name="dni" placeholder="DNI" style="margin-bottom: .5em">

                <label><b>Nivel:</b></label>
                <select class="input" style="margin-bottom: .5em" id="nivel">
                    <option value="secundaria">Secundaria</option>
                    <option value="primaria">Primaria</option>                    
                </select>



                <label><b>Grado y Sección:</b></label>
                <input class="input" type="text" id="grado" name="grado" placeholder="Grado y Sección" style="margin-bottom: .5em">

                
            </div>
            <div class="modal-footer">
                <button class="button is-success" onclick="saveData()">
                    <b>Guardar Datos</b>
                </button>
            </div>
        </div>
    </div> --}}

    <div class="main-heading"  style="background: url('/img/portadas/una.jpg'); padding-bottom: 10px" >
        <div class="inner-heading" style="background: #feffbdeb; ">
            
        
        <div class="container" >
            <div class="columns">
                <div class="column is-two-fifths">
                    <br>
                    <h2 class="title is-2">Piece Of Cake v0.1 <span><img src="{{asset('img/piece.png')}}" style="width: 48px" /></span></h2>
                    <h2 class="subtitle">Para probar tus conocimientos de Ingles.</h2>
                </div>

                <div class="column is-two-fifths">
                    <br>    
                    @yield('progress')
                </div>
                <div class="column">
                    <br>
                    @yield('timer')
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="columns">
                <div class="column">
                    <a href="{{url('/home')}}" class="button is-success">
                        <b><span class="icon-home"></span>&nbsp;Home</b>
                    </a>
                    <a href="{{url('/help')}}" class="button is-default">Help</a>
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
                                        @if(Auth::user()->role=="Teacher")
                                            <span style="color: #33be2a; font-size: 1.1em">{{ Auth::user()->name }}</span> <br>
                                        @else
                                            <span style="color: #929293; font-size: 1.1em">{{ Auth::user()->name }}</span> <br>
                                        @endif
                                        <small>
                                            @if(Auth::user()->role=="Teacher")
                                                <b>English Teacher</b> of The School <b>{{$school->number_school}} - {{$school->name}}</b> in <b>{{$school->location}}</b>
                                            @else
                                                <b>Student</b> of <b>{{Auth::user()->level['grade']}}° "{{Auth::user()->level['section']}}"</b> of The School <b>{{$school->number_school}} - {{$school->name}}</b> in <b>{{$school->location}}</b>
                                            @endif
                                        </small>    
                                    </p>
                                    
                                  </div>
                                  @if(Auth::user()->role=="Teacher")
                                  <hr class="dropdown-divider">
                                  <a class="dropdown-item" href="#">
                                    <span class="icon-profile"></span> &nbsp;My Profile
                                  </a>
                                                
                                  @else
                                  <hr class="dropdown-divider">
                                  <a class="dropdown-item" href="#">
                                    <span class="icon-profile"></span> &nbsp;My Profile
                                  </a>
                                  <a class="dropdown-item" href="{{ url('grafico/user') }}/{{Auth::user()->id}}">
                                    <span class="icon-stats-dots"></span> &nbsp;My Progress
                                  </a>
                                                
                                  @endif
                                  
                                  
                                  <hr class="dropdown-divider">
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="icon-exit"></span> &nbsp;Logout
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
        <br><br><br><br><br><br><br><br><br>
        
        @yield('content')
        
    </div>
    
    <hr>
    <footer class="container">
        <div class="columns">
            <div class="column" style="text-align: center">
                Desarrollado por <a>Ing. Jhon Medina</a>.<br><br>
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


    @yield('scripts')
    
</body>
</html>
