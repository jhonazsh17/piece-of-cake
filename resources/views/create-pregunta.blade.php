<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <style type="text/css">
        .check{
            margin-bottom: 0px;
        }
    </style>
</head>
<body >
    <div class="container">
        <div class="columns">
            <div class="column">
                <br>
                <h1 class="title">Piece Of Cake v0.1</h1>
                <h2 class="subtitle">Para probar tus conocimientos de Ingles.</h2>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="container">
        <form method="POST" action="{{ url('/admin/guardar') }}">
            @csrf
            <h2 class="title">Crear Pregunta:</h2>
            <input class="input" type="text" placeholder="Titulo de Pregunta" name="titulo">
            <br><br>
            <p style="margin-bottom: .5em">
                <b>Opciones:</b>
            </p>
             
            <div class="columns">
                <div class="column">
                    <form action="{{url('enviar')}}" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Opción
                                </th>
                                <th>
                                    Rpta. Correcta
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 800px">
                                    <input class="input" type="text" name="opcion1" placeholder="Opcion 1" style="margin-bottom: .5em">
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-1" name="op1" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 800px">
                                    <input class="input" type="text" name="opcion2" placeholder="Opcion 2" style="margin-bottom: .5em">
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-2" name="op2" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 800px">
                                    <input class="input" type="text" name="opcion3" placeholder="Opcion 3" style="margin-bottom: .5em">
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-3" name="op3" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 800px">
                                    <input class="input" type="text" name="opcion4" placeholder="Opcion 4" style="margin-bottom: .5em">
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-4" name="op4" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 800px">
                                    <input class="input" type="text" name="opcion5" placeholder="Opcion 5" style="margin-bottom: .5em">
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input type="checkbox" class="check" id="option-5" name="op5" onclick="checkOnOff(id)">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                   
                </div>
            </div>      
            

            
            <button class="button is-success" type="submit">Grabar Pregunta</button>



        </form>
    </div>

    <hr>
    <footer class="container">
        <div class="columns">
            <div class="column" style="text-align: center">
                Desarrollado por @Jhonazsh <br><br>
            </div>
        </div>
        

    </footer>

    <script type="text/javascript">
        function checkOnOff(id){
            for(let i=1; i<=5; i++){
                if(id=="option-"+i){
                    document.getElementById(id).checked = true;
                }else{
                    document.getElementById('option-'+i).checked = false;
                }
                
            }
        }
    </script>
</body>
</html>