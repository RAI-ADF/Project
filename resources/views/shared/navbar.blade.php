<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Evvote</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/evvote/public">Home</a></li>
               @if (Auth::check())
			   <li><a href="/evvote/public/create">Create</a></li>
                <li><a href="/evvote/public/questions">Vote List</a></li>
				
				@endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if (Auth::check())
							<li><a href="/evvote/public/users/logout">Logout</a></li>
						@else
							<li><a href="/evvote/public/users/register">Register</a></li>
							<li><a href="/evvote/public/auth/login">Login</a></li>
						@endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>