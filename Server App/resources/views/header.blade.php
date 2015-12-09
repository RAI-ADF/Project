<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
      
<!--    Header Logo-->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="{{URL::to('/')}}"><font size="8"> <i class='fa fa-linux'> <b> Legitz </b> </i> </font> </a>
      </div>

<!--    Header Content-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
             <li class="active"><a href="{{URL::to('/')}}"></i> Home </a></li>
             <li><a href="{{URL::to('/item')}}"></i> Kelola Items </a></li>
             <li><a href="{{URL::to('/bid')}}"></i> Kelola Transaksi </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li> <a href="{{URL::to('/logout')}}"> Log out </a> </li>
          </ul>
    </div>
  </div>
</nav>