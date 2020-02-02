@extends('layouts.base-home')

@section('css')
    <style type="text/css">
        .column-customize{
            padding: 0px 15px;
        }
        .box-button:hover{
            cursor: pointer;
            background-color: #f8f8f8;
        }
    </style>
@endsection

@section('content')
	<div class="columns">
		<div class="column" style="border-right: 1px solid #eee">
			<h5 class="title is-5">Mis Resultados:</h5>
			<table class="table is-bordered">

				@if(count($array)>0)
					@foreach($array as $item)
				
							<tr>
								<td style="padding-right: 10px">
									{{$item['evaluation']}}
								</td>
								<td>
									@if($item['note']<=10)
										<span class="tag"><b style="font-size: 1.1em; color: red">{{$item['note']}}</b></span>
									@else
										<span class="tag"><b style="font-size: 1.1em; color: blue">{{$item['note']}}</b></span>
									@endif
									
								</td>
							</tr>
						
					@endforeach
				@else
					<p style="color: #bbb">
						No Tienes resultados.
					</p>
				@endif
			
			</table>
		</div>
		<div class="column is-three-fifths" style="border-right: 1px solid #eee">
			<h2 class="title" style="text-align: center">Mi Progreso en Gráfico</h2>
			@if(count($array)>0)
				<canvas id="myChart" width="200" height="100"></canvas>
			@else
				<p style="text-align: center; color: #bbb">
					No Tienes resultados aún para mostrar el Gráfico.
				</p>
			@endif
			
		</div>
		<div class="column">
			
		</div>
	</div>
	
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('js/Chart.min.js')}}"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: {!!$arrayExams!!},
        datasets: [{
            label: 'Notes',
            data: {!!$arrayNotes!!},
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 3
        }]
    },
    options: {
	    scales: {
	        yAxes: [{
	            ticks: {
	                min: 0,
               		max: 20,
               		stepSize: 1
	            }
	        }]
	    }
	}
});
</script>

@endsection