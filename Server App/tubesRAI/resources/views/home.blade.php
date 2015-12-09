<!DOCTYPE html>
<html>
  <head>  	
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">

  <style>
	div.tombol {
    position: relative;
    top: 100px;
    right: 450px;    
    color: black;
	}

	div.gambar {
    position: relative;
    top: 250px;   
	}

	
  </style>
  </head>

  
  <body>
  	<center>
  	<div style="position: absolute; left: 50%; top: 15px">
        <div style="position: relative; left: -50%;">  		
  			<img src="image\header.jpg" width="1050" height="120"> 	  		
  		</div>
  	</div>

  	<div style="position: absolute; left: 55%; top: 63px">
    <div style="position: relative; left: -36%; ">      
    <div class="container"> 
      <div>

        <a href="home"><b><font color="white" size='4'>HOME</font></b></a>&nbsp&nbsp&nbsp  
        @if(Auth::guest())      
        <a href="register"><b><font color="white" size='4'>REGISTER</font></b></a>&nbsp&nbsp&nbsp
        @else
        @endif
        <a href="news"><b><font color="white" size='4'>NEWS</font></b></a>&nbsp&nbsp&nbsp
        @if(Auth::guest())
        <a href="login"><b><font color="white" size='4'>LOG IN</font></b></a>&nbsp&nbsp&nbsp

        <!-- <a href="login"><b><font color="white" size='4'>PROFILE</font></b></a>&nbsp&nbsp&nbsp -->

        @else

        <a href="member/{{Auth::user()->username}}"><b><font color="white" size='4'>{{ Auth::user()->username }}</font></b></a>&nbsp&nbsp&nbsp

        <!-- <a href="member"><b><font color="white" size='4'>{{ Auth::user()->username }}</font></b></a>&nbsp&nbsp&nbsp -->

        <a href="auth/logout"><b><font color="white" size='4'>LOG OUT</font></b></a>&nbsp&nbsp&nbsp
        @endif


      </div>
  </div>
  </div>  
  </div>
	<div class="gambar">
    <div class="container">                  
      <img src="image\home.jpg" class="img-rounded" width="750" height="300"> 
    </div>
    </div>

    <div style="position: absolute; left: 50%; top: 670px">
        <div style="position: relative; left: -50%;">  		
  			<img src="image\footer.jpg" width="1050" height="120"> 	  		
  		</div>
  	</div>

    <div style="position: absolute; left: 50%; top: 735px">
    <label>@2016</label>
    </div>
    <div style="position: absolute; left: 75%; top: 735px">
      <a href="about"><font color="white" size="2">About Us</font></a>
      &nbsp&nbsp&nbsp
      <a href="contact"><font color="white" size="2">Contact Us</font></a>
    </div>    
    </center>
  </body>

</html>
