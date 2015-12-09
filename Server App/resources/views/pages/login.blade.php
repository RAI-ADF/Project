@extends('template')
@section('content')
    @if(Session::has('message'))
			<p><strong> {{ Session::get('message') }} </strong></p>
	@endif

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
<!--                        <form id="loginform" class="form-horizontal" role="form" action="login-check">-->
                            {!! Form::open(['url'=>'login']) !!}
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input id="submit" type="submit" class="btn btn-success" >

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="register">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>   
                        {!! Form::close() !!}
<!--                            </form>     -->
@if(Session::has('invalid'))
		<ul class="alert alert-danger">
			<li><strong> {{ Session::get('invalid') }} </strong></li>
		@endif
		</ul>

		@if ( $errors->any() )
		<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li><strong> {{ $error }} </strong></li>
		@endforeach
	</ul>




  @endif

                    </div>                     
            </div>  
        </div>
        

               
               
                
         </div> 
    </div>
    	
@stop