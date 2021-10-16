<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content={{csrf_token()}}>
    <!-- <title>Password Manager</title> -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Password Manager') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }


    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>

</head>

<body>

{{-- navbar begins --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">

      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name','Password Manager')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
          </li>          
        </ul>
      </div>

      <div class="float-right">
        @if (Route::has('login'))
        <div class="">
            @auth
            <a href="{{ url('/home') }}">Home | </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            {{-- form to logout --}}
            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
              @csrf            
            </form>
            @else
              <a href="{{ route('login') }}">Log in</a>
                |  
              @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
              @endif
            @endauth
        </div>
        @endif
      </div>

    </div>
  </nav>
{{-- navbar ends --}}

    

    <main class="container">
        @yield('content')
    </main>

</body>

</html>