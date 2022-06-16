<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House - {{ $page }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css"><!--/ NO NEED TO INCLUDE public, FOR EXAMPLE: public/css/main.css /-->

        <!--/ FAVICON /-->
        <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    </head>
    <body>
        @yield("content") <!--/ THIS WILL DISPLAY ANY THING IN BETWEEN OF @section("content") AND @endsection /-->]

        <footer>
            Copyright 2022 - Pizza House
        </footer>
    </body>
</html>