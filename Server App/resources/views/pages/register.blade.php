@extends('template')

        @section('content')

            <h1>Register your account and Join us</h1>
            <hr/>

        @if (Session::has('message'))
                <span class='label success'>
                    {{ Session::get('message')}}
                </span>
        @endif

        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-hg-6 col-sm-offset-3 col-sm-8 col-sm-offset-2">                      <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>     
                
                {!! Form::open(['url'=>'register/save', 'class'=>'pure-form']) !!}
                
                <div class="form-group">
                    {!! Form::label('lemail','Email') !!}
                    {!! Form::text('email', null,['placeholder'=>'Your Email' ,'class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('lfullname','Fullname') !!}
                    {!! Form::text('fullname',null,['placeholder'=>'Your Fullname','class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('lpassword','Password') !!}
                    {!! Form::password('password',array('required'=>"required",'placeholder'=>'Your Password','class'=>'form-control')) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('laddress','Address') !!}
                    {!! Form::textarea('address',null,['placeholder'=>'Your Address','class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('lphone','Phone Number') !!}
                    {!! Form::text('phone',null,['placeholder'=>'Your Phone Number','class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::submit('Simpan',['class'=>'pure-button']) !!}
                </div>
                
                {!! Form::close() !!}
            </div>
            </div>
        </div>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @stop
