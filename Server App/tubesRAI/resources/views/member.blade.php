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
    <div>
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
        <a href="register"><b><font color="white" size='4'>REGISTER</font></b></a>&nbsp&nbsp&nbsp
        <a href="news"><b><font color="white" size='4'>NEWS</font></b></a>&nbsp&nbsp&nbsp
        <a href="login"><b><font color="white" size='4'>LOG IN</font></b></a>&nbsp&nbsp&nbsp
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

  <div style="position: absolute; left: 50%; top: 170px">
       <div style="position: relative; left: -50%;">     
        <img src="image\border.jpg" width="650" height="490">              
      </div>
    </div>

   

    <!-- Form -->
    <div style="position: absolute; left: 50%; top: 165px">
      <div style="position: relative; left: -50%;">  
        <h1>Profile Page</h1>    
      </div>  
    </div>
    
    <div style="position: absolute; left: 50%; top: 240px">
      <div style="position: relative; left: -30%;">  
        <div class="container">        
          <form class="form-horizontal" role="form">

            <div class="form-group">
              <label class="control-label col-sm-2" name="fullname" >Full Name :</label>
              <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->name }}" readonly>
              </div>
            </div>                       

            <div class="form-group">
              <label class="control-label col-sm-2" name="class">Class :</label>
              <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->class }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="class">Major :</label>
              <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->major }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="NIM">NIM :</label>
              <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->nim }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="faculty">Faculty :</label>
              <div class="col-sm-4">
                <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->faculty }}" readonly>
              </div>
            </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="level">Level :</label>
              <div class="col-sm-4">
                <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                 <input type="text" class="form-control" value="{{$user->level }}" readonly>
              </div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="membership_type">Membership Type :</label>
              <div class="col-sm-4">
                <label class="control-label col-sm-2"></label>
                <input type="text" class="form-control" value="{{$user->membership_type }}" readonly>
              </div>
              </div>

            </div>
             
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-1">
                <button type="submit" class="btn btn-default">Upload Bukti Pembayaran</button>
              </div>
            </div>
                      
            </div>            

          </form>
        </div>
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

   </div>
    </center>
  </body>

</html>
