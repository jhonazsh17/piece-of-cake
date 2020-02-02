@extends('layouts.base-home')


@section('content')
	<div class="columns">
		<div class="column">
			<h3 class="title is-3">Your Answers</h3>
			<hr>
			<h4 class="title is-4">Exámen: @if($exam->title!=""){{$exam->title}}@else Exam {{$exam->order_of_evaluation}}@endif</h4>
			<?php $i=0; ?>
			@foreach($questions as $question)
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
                                    
                                    <div class="number-of-number">
                                        <b>Question {{ $i }} of {{ count($questions) }}</b>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
						</div>
						
					</div>
					<br>
					Your Answer:<br>
					

					@foreach($question->answers as $answer)
						@if($answer['id_user_support']==Auth::user()->id)
							<span class="tag is-warning is-medium" style="margin-top: .5em"><b>{{$answer['answer_description']}}</b></span>
						@endif
					@endforeach
					<br><br>
				</div>

				
			@endforeach
		</div>
	</div>
	
@endsection

