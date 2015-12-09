@extends('auth.master')

@section('content')
    {!! Form::open(array('url' => 'auth/login')) !!}

    <label>Email
        <input type="email" placeholder="Masukkan Email Anda" name="email">
    </label>

     <label>Password
        <input type="password" name="password">
    </label>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button class="button expanded" type="submit">Login</button>
    </div>

    {!! Form::close() !!}
@stop