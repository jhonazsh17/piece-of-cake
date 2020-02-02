@extends('layouts.base-home')

@section('css')
    <style type="text/css">
        .checkbox{
            padding: .3em .5em;  
            border-radius: 3px;
            margin-bottom: .1em;
            border-bottom: 3px solid white;        
        }
        .checkbox:hover{
            background: #efefef;
            border-bottom: 3px solid #cbe6c7;
        }
        .reloj{
            background-color: black;
            text-align: center;
            width: 190px;
            border-radius: 6px;
            padding: 0em;
            position: absolute;
            right: 0;
            border: 5px solid #cac7c7;
        }
        .btn-comodin:hover{
            background: #eee !important;
            cursor: pointer;
            border: 1px solid #ccc !important;
        }
        .message-comodin{
            position: fixed;
            bottom: 0;
            width: 350px;
            right: 50px;
            background: #f2f2f2;
            padding: 10px;
            border-right: 1px solid #dbdada;
            border-top: 1px solid #dbdada;
            border-left:1px solid #dbdada;
            border-radius: 5px 5px 0px 0px;
            box-shadow: 0px 0px 15px 0px #aaa6a6;
            display: none;
        }
    </style>
@endsection

@section('progress')
    @include('objects.progress-bar')
@endsection

@section('timer')
    @include('objects.timer')
@endsection

@section('content')
    <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/session')}}/{{$exam->session['id']}}/exams">Exams</a></li>
            <li class="is-active"><a href="#" aria-current="page">
                @if($exam->title!=""){{$exam->title}}@else Exam {{$exam->order_of_evaluation}}@endif
            </a></li>
          </ul>
        </nav>

    <div class="columns">
        <div class="column is-three-fifths">
            <h3 class="title is-3">Exámen: @if($exam->title!=""){{$exam->title}}@else Exam {{$exam->order_of_evaluation}}@endif</h3>
            <h4 class="subtitle is-5">Sesión {{$exam->session['order_of_session']}}: {{$exam->session['title']}}</h4>
            <h5 class="title is-6" style="font-weight: normal;">Unidad {{$exam->session->unit['order_of_unit']}}: {{$exam->session->unit['title']}}</h5>
            <p><small>Solo tienes <b style="text-decoration: underline;">1 intento</b> para responder, así que piensa bien y responde correctamente.</small></p>
        </div>
        <div class="column" style="text-align: right">
            <a href="{{url('/session')}}/{{$exam->session['id']}}/exams" class="button is-danger"><b>Volver a Lista de Exámenes</b></a>
        </div>
    </div>
    
       

        <form action="{{url('evaluation')}}/{{$exam->id}}/answers" method="POST">
            @csrf
        <?php $i=0; ?>

        @if(count($cal1)>0)
            @foreach($questions as $question)
                <div class="columns">
                <div class="column" >
                    <div class="box" style="padding-bottom: 0px; box-shadow: 0px 0px 7px 0px #b5b5b5">
                    <div class="box-question">
                        <div class="columns">
                            <div class="column is-four-fifths box-question__column-content">
                                <div>
                                    <span class="box-question__number">
                                        <b>{{ $i=$i+1 }}</b>
                                    </span> . {!!$question->question_description!!}
                                    
                                </div>
                                <br>
                                <div>
                                    <small style="color: #3ec01e">
                                        {{$question->question_instruction}}
                                    </small>
                                </div>
                            </div>
                            <div class="column">
                                <div class="is-pulled-right">
                                    <a class="button is-dark is-small margin-top-3px" onclick="limpiarUna({{ $question->id }}, {{ $i }})" >
                                        <b>Clean Question</b>
                                    </a>
                                    <div class="number-of-number">
                                        <b>Q{{ $i }} of {{ count($questions) }}</b>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="columns">
                        <div class="column is-four-fifths">
                            <ul class="list-content-options">
                                <!-- Options -->
                                @foreach($question->options as $option)
                                    @if($option->id_question == $question->id)
                                        <li class="item-option">
                                            <label class="checkbox">
                                              <input type="checkbox" onclick="checkOnOff({{ $question->id }}, {{ $option->order_option }}, {{ $i }})" id="option-{{ $question->id }}{{ $option->order_option }}">
                                              {{$option->option_description}}
                                            </label>
                                        </li>
                                    @endif    
                                @endforeach
                            </ul>
                        </div>
                        <div class="column" style="padding-top: 3em; text-align: center">
                            <a style="background: #f6f6f6; border: 1px solid #ddd; padding: 5px; border-radius: 4px"  class="button btn-comodin" data-target="modal" aria-haspopup="true" onclick="comodin({{ $i }})">
                                <img src="{{url('img/png/comodin.png')}}" style="width: 28px"><br>
                                <b>Comodín</b>
                            </a>

                        </div>
                        
                    </div>




                    
                    <input type="hidden" id="pregunta-{{$question->id}}" name="question-{{$i}}">      
                    <input type="hidden" id="correcta-{{$question->id}}" name="correct-{{$i}}">
                    <input type="hidden" id="progreso-{{$i}}">   
                    </div>            
                </div>
                
            </div>
            
            @endforeach
        @else

        @endif

        
    </div>
    <br>

    <div class="container">
        <div style="text-align:center">
            
                @if(count($cal1)>0)
                    <p>
                      <b>¡Recuerda!,</b> Solo tienes 1 Intento.  
                    </p>
                    <br>

                    <button class="button is-success" type="submit" ><b>Evaluar mis Respuestas</b></button>
                    
                    <a class="button is-secondary" onclick="limpiar()" href="#main"><b>Limpiar Respuestas</b></a>

                    
                        
                @else
                    </form>

                    <button class="button is-large is-warning" id="goexam" onclick="goExam()">
                        Go Exam!
                    </button>
                    <br>
                    <br>
                    
                @endif
                
            
                
            
            
        </div>


    </div>


    <div class="message-comodin" id="m-comodin">
        <h6 class="title is-6" style="margin-bottom: 0px"><b>Comodín de Ayuda:</b></h6>
        <hr style="margin-top: 10px; margin-bottom: 10px; border: 1px solid #ddd">
        <p style="margin-bottom: 10px">
            Pide Ayuda a uno de tus Compañeros de clase:
        </p>
            
            <div class="select" style="margin-bottom: 10px">
              <select id="partner">
                <option disabled selected>Elige un Compañero...</option>
                @foreach($usersComodin as $user)
                <option>{{$user->name}}</option>
                @endforeach
              </select>
            </div>

        <b>Pregunta:</b>
        <div style="margin-bottom: 10px">
            Pregunta N° <span><b id="nro"></b></span>
        </div>
        <b>Mensaje:</b>
        <div style="margin-top: 5px">
            <textarea class="textarea" placeholder="Escribe aquí un mensaje, a tu compañero." id="message"></textarea>
        </div>
        <div style="margin-top: 10px">
            <a class="button is-dark" onclick="cerrarComodin()"><b>Cerrar</b></a>
            <a class="button is-warning"onclick="sendComodin()"><b>Enviar</b></a>
        </div>
    </div>
@endsection

@section('scripts')
    
    <script type="text/javascript">



        cantidadPreguntas = "{{ count($questions) }}";
        porcentaje = 0;
        let idPreg = 0;
        let por = 0;

        let timerSeg = 60;
        let timerMin = 20;

        evaluate = "{{$bandera}}";

        if(evaluate==1){
            setTimeout(function(){  
                document.getElementById('min').innerHTML = '19';
                document.getElementById('seg').innerHTML = '59';
                timerSeg = timerSeg - 1;
                timerMin = timerMin - 1;
                timer(); 
            },1000);
        }

        function comodin(id){
            document.getElementById('m-comodin').style.display = "block";
            document.getElementById('nro').innerHTML = id;
        }

        function sendComodin(){
            var mensaje = document.getElementById('message').value;
            console.log(mensaje);
        }

        function cerrarComodin(){
            document.getElementById('m-comodin').style.display = "none";
        }
        
        function goExam(){
            document.getElementById('goexam').setAttribute("disabled", "disabled");
            axios.get('/eval/uation/go/{{$exam->id}}')
            .then(function (response) {
                if(response['data']==1){
                    location.href="/session/{{$exam->session['id']}}/exam/{{$exam->id}}";
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        }


        //----- Timer -----

        function timer(){

            setTimeout(function(){

                if(timerMin==0){
                    location.href = "/";
                }else{
                    if(timerSeg==0){
                        timerSeg = 59;
                        timerMin = timerMin - 1;
                        document.getElementById('min').innerHTML = evaluaMenorDeDiez(timerMin);
                        document.getElementById('seg').innerHTML = evaluaMenorDeDiez(timerSeg);
                    }else{
                        timerSeg = timerSeg - 1;
                        document.getElementById('seg').innerHTML = evaluaMenorDeDiez(timerSeg);
                    }
                }
                
                timer();
                
            }, 1000);
        }
        
        //---------------

        function evaluaMenorDeDiez(numero){
            if(numero<10){
                return "0"+numero;
            }else{
                return numero;
            }
        }

        function checkOnOff(id, op, ind){
            for(let i=1;i<=5;i++){
                if(op==i){
                    document.getElementById('option-'+id+""+i).checked = true;
                    document.getElementById('correcta-'+id).value = op;
                    document.getElementById('progreso-'+ind).value = ""+id;
                    document.getElementById('pregunta-'+id).value = ""+id;
                    progreso(0);
                }else{
                    document.getElementById('option-'+id+""+i).checked = false;
                }                
            }
        }

        function limpiar(){
            document.getElementById('porcentaje').innerHTML = 0; 
            document.getElementById('progress-bar').setAttribute("value", 0     );

            let checkbox = document.getElementsByTagName('input');
            for(let i=0; i<=checkbox.length; i++){
                checkbox[i].checked = false;
                checkbox[i].value = "";
            }
            
            
        }

        function limpiarUna(id, ind){
            console.log(id);
            for(let i=1; i<=5; i++){
                document.getElementById('option-'+id+""+i).checked = false;
                document.getElementById('pregunta-'+id).value = "";
                document.getElementById('correcta-'+id).value = "";
                document.getElementById('progreso-'+ind).value = "";
                porcentaje = 0;
                progreso(1);
            }
            
        }

        function progreso(band){
            for(let i=1; i<=cantidadPreguntas; i++){
                if(document.getElementById('progreso-'+i).value != ""){
                    
                    porcentaje = porcentaje + 100/cantidadPreguntas;
                    
                    por = porcentaje;
                
                }
  
            }

            if(band==0){
                porcentaje = porcentaje;

            }else if(band==1 && 100/cantidadPreguntas){
                if(porcentaje==0){
                    porcentaje = 0;
                }else{
                    porcentaje = porcentaje;
                }
            }

            document.getElementById('porcentaje').innerHTML = porcentaje; 
            document.getElementById('progress-bar').setAttribute("value", porcentaje);

            console.log(porcentaje);

            porcentaje = 0;
            
        }

        function saveData(){
            axios.post('/estudiante/guardar', {
                nombre: document.getElementById('name').value,
                dni: document.getElementById('dni').value,
                nivel: document.getElementById('nivel').value,
                grado: document.getElementById('grado').value
            })
            .then(function (response) {
                if(response.data==1){
                    
                }    
            })
            .catch(function (error) {
                console.log(error);
            });

        }

    </script>
    

@endsection