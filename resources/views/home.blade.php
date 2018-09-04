<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div id="app">
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>