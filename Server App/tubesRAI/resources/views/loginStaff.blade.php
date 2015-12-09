<!DOCTYPE html>

<html>
  <head>    
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style>
  div.tombol {
    position: relative;
    top: 100px;
    right: 450px;    
    color: black;
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
        <a href="loginStaff"><b><font color="white" size='4'>LOG IN</font></b></a>&nbsp&nbsp&nbsp
      </div>
  </div>
  </div>  
  </div>

  <div style="position: absolute; left: 50%; top: 670px">
     <div style="position: relative; left: -50%;">     
      <img src="image\footer.jpg" width="1050" height="120">              
    </div>
  </div>

  <div style="position: absolute; left: 50%; top: 135px">
    <div style="position: relative; left: -50%;">       
        <div class="container">                  
          <img src="image\register.jpg" width="1050px" height="565px">       
      </div>
    </div>
  </div>

  <div style="position: absolute; left: 50%; top: 250px ;width:500px">
    <div style="position: relative; left: -50%;">       
      <div style=" border-style: solid; background-color:white">
        <h1>Login</h1>
        <div class="container">                  
          <form class="form-horizontal" role="form" action="/auth/login" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
              <label class="control-label col-sm-2" name="username">Username :</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Enter username" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="password">password :</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-1">
                <button type="login" class="btn btn-default">LOGIN</button>
              </div>
            </div>
          </div>
        </form>
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
      </div>
    </div>
  </div>

  <div style="position: absolute; left: 50%; top: 735px">
    <label>@2016</label>
    </div>
    <!-- <div style="position: absolute; left: 75%; top: 735px">
      <a href="about"><font color="white" size="2">About Us</font></a>
      &nbsp&nbsp&nbsp
      <a href="contact"><font color="white" size="2">Contact Us</font></a>
    </div> -->
  </center>
  </body>

</html>