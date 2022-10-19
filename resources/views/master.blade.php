<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @vite('resources/js/app.js', 'vendor/courier/build')
        @include('includes.style')
        @include('includes.fonts')
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            <div class="card p-4">
                @if (session('status'))
                <div class="bg-success text-center text-white">
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            @yield('content')
        </div>
        @include('includes.scripts')
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>
