@extends('master')
@section('title', 'Contact')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
          <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
				
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif
				
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                

                <fieldset>
                    <legend>Submit a new vote</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Question</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="question" name="question" placeholder="Question">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Option 1</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="option1" name="option1"></textarea>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Option 2</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="option2" name="option2"></textarea>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Option 3</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="option3" name="option3"></textarea>
                          
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Option 4</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="option4" name="option4"></textarea>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>

            </form>



            <!--{!! Form::open(['action'=>'QuestionsController@store']) !!}

                <div class="form-group">
                    {!! Form::label('question','Questions') !!}
                        <div class="col-lg-10">
                            {!! Form::text('question',null,['placeholder'=>'question']) !!}
                        </div>
                </div>

                {!! Form::submit('submit') !!}

            {!! Form::close() !!}-->
        </div>
    </div>
@endsection