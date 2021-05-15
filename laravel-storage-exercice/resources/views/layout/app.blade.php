<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Document</title>

</head>

<body style="background: rgb(29, 114, 104)">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="flex-grow: 0 !important;">
                <div class="navbar-nav">
                    <a class=" mx-2  nav-link btn btn-primary text-white mt-3 px-5" href={{route('users')}}>User</a>
                    <a class=" mx-2  nav-link btn btn-success text-white mt-3 px-5" href={{route('photos')}}>Photo</a>
                    <a class=" mx-2  nav-link btn btn-danger text-white mt-3 px-5" href={{route('albums')}}>Album</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')


    <script src={{asset('js/app.js')}}></script>
</body>

</html>