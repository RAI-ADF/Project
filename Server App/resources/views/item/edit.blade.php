@extends('template')

@section('content')

    <h1>Edit Item</h1>
    <hr/>

    {!! Form::model($item, [
        'method' => 'PATCH',
        'route' => ['item.update', $item->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
                {!! Form::label('item_id', 'Item Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('item_name') ? 'has-error' : ''}}">
                {!! Form::label('item_name', 'Item Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('item_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_desc') ? 'has-error' : ''}}">
                {!! Form::label('item_desc', 'Item Desc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('item_desc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_desc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('item_img') ? 'has-error' : ''}}">
                {!! Form::label('item_img', 'Item Img: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('item_img', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_img', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('start_bid') ? 'has-error' : ''}}">
                {!! Form::label('start_bid', 'Start Bid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('start_bid', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('start_bid', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('buy_now_price') ? 'has-error' : ''}}">
                {!! Form::label('buy_now_price', 'Buy Now Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('buy_now_price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('buy_now_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_bid') ? 'has-error' : ''}}">
                {!! Form::label('last_bid', 'Last Bid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_bid', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_bid', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
                {!! Form::label('start_date', 'Start Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('max_date') ? 'has-error' : ''}}">
                {!! Form::label('max_date', 'Max Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('max_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('max_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('seller') ? 'has-error' : ''}}">
                {!! Form::label('seller', 'Seller: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('seller', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('seller', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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