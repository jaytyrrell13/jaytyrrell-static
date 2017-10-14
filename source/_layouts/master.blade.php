<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $page->app_name }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:600,400|Domine" media="all">
    </head>
    <body>
        @include('_partials.header')

        <div class="container">
            @yield('content')
        </div>

        @include('_partials.footer')
    </body>
</html>
