<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Home Page</title>
        @include('includes.style')
        @include('includes.fonts')
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('includes.scripts')
    </body>
</html>
