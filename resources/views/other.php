@if(count($preguntas)>0)
            @foreach($preguntas as $pregunta)
            <div class="columns">
                <div class="column" >
                    <div class="box" style="padding-bottom: 0px; box-shadow: 0px 0px 7px 0px #b5b5b5">
                    <div class="box-question">
                        <div class="columns">
                            <div class="column is-three-fifths box-question__column-content">
                                <h3><b><span class="box-question__number">{{ $i=$i+1 }}</span> . {{$pregunta->descripcion}}</b></h3>
                            </div>
                            <div class="column">
                                <div class="is-pulled-right">
                                    <a class="button is-danger is-small margin-top-3px" onclick="limpiarUna({{ $pregunta->id }}, {{ $i }})" >
                                        <b>Clean Question</b>
                                    </a>
                                    <div class="number-of-number">
                                        <b>Q{{ $i }} of {{ count($preguntas) }}</b>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="columns">
                        <div class="column is-three-fifths">
                            <ul class="list-content-options">
                                @foreach($opciones as $opcion)
                                    @if($opcion->id_pregunta == $pregunta->id)
                                        <li class="item-option">
                                            <label class="checkbox">
                                              <input type="checkbox" onclick="checkOnOff({{ $pregunta->id }}, {{ $opcion->orden }}, {{ $i }})" id="option-{{ $pregunta->id }}{{ $opcion->orden }}">
                                              {{$opcion->descripcion}}
                                            </label>
                                        </li>
                                    @endif    
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="column">
                            

                        </div>
                    </div>




                    
                    <input type="hidden" id="pregunta-{{$pregunta->id}}" name="question-{{$i}}">      
                    <input type="hidden" id="correcta-{{$pregunta->id}}" name="correct-{{$i}}">
                    <input type="hidden" id="progreso-{{$i}}">   
                    </div>            
                </div>
                
            </div>
            
            @endforeach
        @else
            <div class="columns">
                <div class="column" style="color: #ccc; font-size: 2em; text-align: center">
                    No se ha creado ninguna pregunta.
                </div>
            </div>
        @endif






        <script>
       
        cantidadPreguntas = "{{ count($preguntas) }}";
        porcentaje = 0;
        let idPreg = 0;
        let por = 0;

        //----- Timer -----
        let timerSeg = 60;
        let timerMin = 20;

        setTimeout(function(){  
            document.getElementById('min').innerHTML = '19';
            document.getElementById('seg').innerHTML = '59';
            timerSeg = timerSeg - 1;
            timerMin = timerMin - 1;
            timer(); 
        },1000);

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
                    document.getElementById('modal').style.display = "none";
                }    
            })
            .catch(function (error) {
                console.log(error);
            });

        }
    </script>