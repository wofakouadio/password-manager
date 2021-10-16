<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">

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

<body class="bg-dark">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xs-6 col-md-4 card mt-4 my-4">

                <div class="card-header">

                    <h6 class="display-5 card-title text-center">{{ config('app.name', 'Password Manager')}} 🔐</h6>

                </div>

                <div class="card-body">
                    <div class="form-group">
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn_login" class="btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>