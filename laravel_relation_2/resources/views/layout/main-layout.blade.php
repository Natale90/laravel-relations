<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>laravel_relation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>

        @include('components.header')
        @yield('sectionHome')
        @yield('sectionShow')
        @include('components.footer')

    </body>
</html>
