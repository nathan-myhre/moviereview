<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <body>
        <div id="app">
            Testing
            <example-component></example-component>
        </div>  
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>