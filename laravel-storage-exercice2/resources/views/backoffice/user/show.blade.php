@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Users</h1>
        <a href={{route('users')}} class="btn btn-danger text-white">Retour</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Photos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->nom }}</td>
                <td>{{ $users->prenom }}</td> 
                <td>{{ $users->age }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $users->picture) }}" alt=""></td>
            </tr>
        </tbody>
    </table>
</main>
@endsection