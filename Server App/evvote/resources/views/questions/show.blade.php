@extends('master')
@section('title', 'View a question')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $question->question !!}</h2>
                    <p> <strong>Option 1</strong>: {!! $question->option1 !!}</p>
                    <p> <strong>Option 2</strong>: {!! $question->option2 !!}</p>
					<p> <strong>Option 3</strong>: {!! $question->option3 !!}</p>
					<p> <strong>Option 4</strong>: {!! $question->option4 !!}</p>
                </div>
                <a href="{!! action('QuestionsController@edit', $question->slug) !!}" class="btn btn-info">Edit</a>
                <form method="post" action="{!! action('QuestionsController@destroy', $question->slug) !!}" class="pull-left">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-warning">Delete</button>
							</div>
						</div>
				</form>
            </div>
    </div>

@endsection