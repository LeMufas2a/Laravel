@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5 text-white">caracs</h1>
        <a href="/caracteristiques/create" class="btn btn-success shadow-none text-white ">Ajouter</a>
    </div>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Chiffre</th>
                <th scope="col">Icone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caracs as $carac)
            <tr>
                <td>{{ $carac->id }}</td>
                <td>{{ $carac->nom }}</td>
                <td>{{ $carac->chiffre }}</td>
                <td> <i class="fab {{ $carac->icone }}"></i></td>
                <td>
                    <div class="d-flex">
                        <form action="/caracteristiques/{{$carac->id}}/download" method="post">
                            @csrf
                            <button class="btn btn-warning " type="submit"><del>Télécharger</del></button>
                        </form>
                        <a href="/caracteristiques/{{ $carac->id }}/edit"
                            class="btn btn-primary  shadow-none ms-3 ">Modifier</a>
                        <form action="/caracteristiques/{{ $carac->id }}/delete" method="POST">
                            @csrf
                            <button class="btn btn-danger ms-3" type="submit">Supprimer</button>
                        </form>
                        <a href="/caracteristiques/{{$carac->id}}/show" class="btn btn-secondary  text-dark ms-3">
                            Show
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection