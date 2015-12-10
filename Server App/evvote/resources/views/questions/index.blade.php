@extends('master')
@section('title', 'View all questions')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Vote lists </h2>
                </div>
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif
				
                @if ($question->isEmpty())
                    <p> There is no Vote.</p>
                @else
					
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vote</th>
                                <th>Option 1</th>
								<th>Option 2</th>
								<th>Option 3</th>
								<th>Option 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $question)
                                <tr>
                                    <td>{!! $question->id !!} </td>
                                    <td>
										<a href="{!! action('QuestionsController@show', $question->slug) !!}">{!! $question->question !!}</a>
									</td>
                                    <td>{!! $question->option1  !!}</td>
									<td>{!! $question->option2  !!}</td>
									<td>{!! $question->option3  !!}</td>
									<td>{!! $question->option4  !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection