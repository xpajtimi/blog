<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  --}}

    <!-- CSRF Token -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">

                @if(Auth::check())
                     <div class="col-lg-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('home') }}"> Home</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('categories') }}"> Categories</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('tags') }}"> Tags</a>
                        </li>

                         <li class="list-group-item">
                            <a href="{{ route('tag.create') }}"> Create tag</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('posts') }}"> Posts </a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('posts.trashed') }}"> All trashed posts </a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('category.create') }}"> Create new category</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}"> Create new Post </a>
                        </li>
                    </ul>
                </div>
                @endif               

                <div class="col-lg-8">
                   @yield('content')
                </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--  <script src="{{ asset('js/toastr.min.js') }}"></script>  --}}

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>
    <script>

        @if(Session::has('success'))

            toastr.success("{{ Session::get('success') }}")

        @endif

        @if(Session::has('info'))

            toastr.info("{{Session::get('info') }}")

        @endif

        @if (Session::has('info'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok"></span> 
                <em>{!! Session::get('info') !!}</em>
            </div>
        @endif
    </script>


</body>
</html>