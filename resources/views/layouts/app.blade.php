<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TodoApp</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <style>
        html, body{
            margin: 0;
            height: 100%;
        }
        body{
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <body class="bg-info bg-gradient">
        @yield('content')
    </body>
</html>
