<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Document</title>

</head>

<body style="background: rgb(112, 13, 13)">
    @include('partials.nav')
    @yield('content')


    <script src={{asset('js/app.js')}}></script>
</body>

</html>