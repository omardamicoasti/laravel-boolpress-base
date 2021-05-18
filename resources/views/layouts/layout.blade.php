<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>@yield('title') | Boolpress</title>
</head>
<body>
    @include('partials.header')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')

</body>
</html>