<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jowie Trence P. Jurado</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="{{asset('stylesheets/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="wrapper">
            @include('navbar')
            @include('heading')
        </div>
    </body>
</html>
