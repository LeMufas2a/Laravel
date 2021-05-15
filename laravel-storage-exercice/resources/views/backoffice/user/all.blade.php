@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Users</h1>
        <a href="/users/create" class="btn btn-success shadow-none text-white ">Ajouter</a>
    </div>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
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
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $user->picture) }}" alt=""></td>
                <td class="d-flex">
                    <form action="/users/{{$user->id}}/download" method="post">
                        @csrf
                        <button class="btn btn-warning text-white" type="submit">Télécharger</button>
                    </form>
                    <a href="/users/{{ $user->id }}/edit"
                        class="btn btn-primary text-white shadow-none ms-3 ">Modifier</a>
                    <form action="/users/{{ $user->id }}/delete" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button class="btn btn-danger text-white ms-3" type="submit">Supprimer</button>
                    </form>
                    <a href="/users/{{$user->id}}/show" class="btn btn-secondary text-white ms-3" >
                        Show
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection