@extends('master')
@section('title', 'Edit a Question')

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
                    <legend>Edit Question</legend>
                    <div class="form-group">
                        <label for="question" class="col-lg-2 control-label">Question</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="question" name="question" value="{!! $question->question !!}">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="option1" class="col-lg-2 control-label">Option 1</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="option1" name="option1" value="{!! $question->option1 !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="option2" class="col-lg-2 control-label">Option 2</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="option2" name="option2" value="{!! $question->option2 !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="option3" class="col-lg-2 control-label">Option 3</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="option3" name="option3" value="{!! $question->option3 !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="option4" class="col-lg-2 control-label">Option 4</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="option4" name="option4" value="{!! $question->option4 !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection