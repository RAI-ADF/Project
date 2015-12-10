<!DOCTYPE html>
    
    

@extends('master')

@section('title', 'Home')

@section('content')
<head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
				margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Lato';
                font-size: 80px;
				text-align: center;
            }
			
			
        </style>
    </head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">Welcome to Evvote</div>
			<div class="title">Admin Page</div>
        </div>
    </div>
</body>
@endsection
