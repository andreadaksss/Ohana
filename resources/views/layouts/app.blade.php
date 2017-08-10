<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <link rel="icon" href="images/3.png" type="image/gif" sizes="16x16">
    <title>Ohana</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
        
            <div class="container">
                <div class="navbar-header">
                
                

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
  <img src="images/3.png" width="50px" height="50px"> 
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                   
                    OHANA
                        <!--{{ config('app.name', 'Ohana') }}-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav">

                <!-- Timeline Profile Event Album Family Tree About Us -->
      <li class="home"><a href="/home"><i class="fa fa-newspaper-o" style="font-size:20px;color:#00cc66;"></i></a></li>
      
       <li><a href="/user/profile"><i class="fa fa-user" style="font-size:20px;color:#00cc66;"></i></a></li>
      <li><a href=""><i class="fa fa-calendar" style="font-size:20px;color:#00cc66;"></i></a></li>
      <li><a href=""><i class="fa fa-picture-o" style="font-size:20px;color:#00cc66;"></i></a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-pagelines" style="font-size:20px;color:#00cc66;"></i><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/familytree">Add Family</a></li>
          <li><a href="/view">View Family Tree</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info-circle" style="font-size:20px;color:#00cc66;"></i><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/application">Application</a></li>
          <li><a href="/mobile">Mobile App</a></li>
          <li><a href="/developers">Developers</a></li>
        </ul>
      </li>
    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ URL::route('login.facebook') }}"> 
                                <i class="fa fa-facebook-square" style="font-size:20px;color:#483D8B;"></i>
                                &nbsp;Login with Facebook</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user-o" style="font-size:20px;color:#00cc66;"></i>
                                    <!-- {{ Auth::user()->email }} <span class="caret"></span> -->
                                    {{ Auth::user()->uFirstname }} {{ Auth::user()->uMiddlename }} {{ Auth::user()->uLastname }} <span class="caret"></span>
                                    
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" style="font-size:20px;color:#00cc66;"></i> &nbsp;Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
