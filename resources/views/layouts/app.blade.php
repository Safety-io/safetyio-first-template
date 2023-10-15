<!DOCTYPE html>
{{--<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Starter</title>
--}}{{--    <link rel="stylesheet" href="dist/styles.css" />--}}{{--
    @vite('resources/css/app.css')
--}}{{--    <script src="dist/script.js"></script>--}}{{--
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>

</body>
</html>--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{ asset("build/assets/app-6fdc1463.js") }}"></script>
    <title>@yield('title')</title>
{{--    <style>--}}
{{--        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,600;1,400;1,600&display=swap');--}}

{{--        html, body, label, h1,a,p{--}}
{{--            font-family: 'Roboto', sans-serif;--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body>

@section('sidebar')
@include('layouts.header')
@show
@yield('content')
</body>
</html>
