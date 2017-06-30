<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        

        <title>Laravel</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stylesheet.css">
        <link rel="stylesheet" href="http://bootswatch.com/solar/bootstrap.min.css">
                
    </head>
    <body>
    <div class="navbar navbar-default">
       <a class="navbar-brand" href="/">Mathijn</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="/">Home</a>    
            </li>
            <li>
                <a href="about">About</a>
            </li>
        </ul>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                
                @if(Auth::guest())
                <li><a href="{{ route('login') }}">Aanmelden</a></li>
                <li><a href="{{ route('register') }}">Registreren</a></li>
                @else
                <li><a href="#">Profiel van {{ Auth::user()->name }}</a></li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Afmelden
                    </a>
                    <form id="logout-form"
                          action="{{ url('/logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
<!--                 && Auth::user()->isAdmin() -->
                @if(Auth::check()) 
                <li><a href="{{ url('post/create') }}">nieuwe post</a></li>
                @endif
            </ul>
        </div>
        
        
    </div>
     <div class="container">
        @yield('content')      
		</div>
		<script></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
