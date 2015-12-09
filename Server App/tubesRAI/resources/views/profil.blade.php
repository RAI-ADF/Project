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
    <div style="position: absolute; left: 50%; top: 150px">
      <div style="position: relative; left: -50%;">  
        <h1>Register Now</h1>    
      </div>  
    </div>
    
    <div style="position: absolute; left: 50%; top: 240px">
      <div style="position: relative; left: -30%;">  
        <div class="container">        
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-sm-2" name="fullname">Full Name :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter full name" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="placeofbirth">Place of Birth :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter Place of Birth" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="dateofbirth">Date of Birth :</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" placeholder="Enter Date of Birth" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="gender">Place of Birth :</label>              
            </div>
            <div style="position: absolute; left: 160px; top: 147px">
              <div style="position: relative; left: 50px;">
                <div class="radio">
                  <label><input type="radio" name="optradio">Male</label>
                  <label><input type="radio" name="optradio">Female</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="class">Class :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter Class" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="NIM">NIM :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter NIM" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="major">Major :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter Major" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" name="major">Membership Type :</label>
              <div style="position: absolute; left: 160px; top: 334px">
                <div style="position: relative; left: 50px;">
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose Membership
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Membership</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Non Membership</a></li>          
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-1">
                <button type="submit" class="btn btn-default">Submit</button>
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

   
    </center>
  </body>

</html>
