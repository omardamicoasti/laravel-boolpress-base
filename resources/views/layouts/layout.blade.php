<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
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