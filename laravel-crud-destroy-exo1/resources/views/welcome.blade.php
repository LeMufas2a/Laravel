<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Document</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Genre</th>
                <th scope="col">Supression</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($personnes as $personne)

            <tr>
                <th scope="row">{{$personne->id}}</th>
                <td>{{$personne->name}}</td>
                <td>{{$personne->prenom}}</td>
                <td>{{$personne->age}}</td>
                <td>{{$personne->ddn}}</td>
                <td>{{$personne->genre}}</td>
                <td>
                    <form class="text-center" action="/personne/{{$personne ->id}}/delete" method="post">
                        @csrf
                        <button class="btn btn-danger w-50 text-center" type="submit">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
    <script src={{asset('js/app.js')}}></script>
</body>

</html>