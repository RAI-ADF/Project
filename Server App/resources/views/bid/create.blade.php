@extends('template')

@section('content')

    <h1>Create New Bid</h1>
    <hr/>

    {!! Form::open(['route' => 'bid.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
                {!! Form::label('id', 'Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
                {!! Form::label('item_id', 'Item Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('buyer') ? 'has-error' : ''}}">
                {!! Form::label('buyer', 'Buyer: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('buyer', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('buyer', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('current_bid') ? 'has-error' : ''}}">
                {!! Form::label('current_bid', 'Current Bid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('current_bid', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('current_bid', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bid_date') ? 'has-error' : ''}}">
                {!! Form::label('bid_date', 'Bid Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bid_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('bid_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection