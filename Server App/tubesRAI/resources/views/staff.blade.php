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

  <div style="position: absolute; left: 50%; top: 170px">
       <div style="position: relative; left: -50%;">     
        <img src="image\border.jpg" width="650" height="490">              
      </div>
    </div>   

    <!-- Form -->
    <div style="position: absolute; left: 50%; top: 165px">
      <div style="position: relative; left: -50%;">  
        <h1>Tutor Attendance</h1>    
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
              <label class="control-label col-sm-2" name="nim">NIM :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="NIM" >
              </div>
            </div>  
            <div class="form-group">
              <label class="control-label col-sm-2" name="Class">Class :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="class" >
              </div>
            </div>                  
            <div class="form-group">
              <label class="control-label col-sm-2" name="major">Major :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="class" >
              </div>
            </div>                                                  
            <div class="form-group">
              <label class="control-label col-sm-2" name="shift">Shift :</label>
              <div class="col-sm-1">
                <select class="selectpicker">
                  <option>Shift 1</option>
                  <option>Shift 2</option>
                  <option>Shift 3</option>
                  <option>Shift 4</option>
                  <option>Shift 5</option>
                </select>
              </div>
            </div>                      
            <div class="form-group">
              <label class="control-label col-sm-2" name="date">Date :</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" placeholder="Enter Date" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="activity">Esap Activity :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="class" >
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
      <!-- <a href="about"><font color="white" size="2">About Us</font></a>
      &nbsp&nbsp&nbsp
      <a href="contact"><font color="white" size="2">Contact Us</font></a> -->
    </div>    

   
    </center>
  </body>

</html>
