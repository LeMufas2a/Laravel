@extends('layout.app')
@section('content')
<main id="main bg-danger">
    <div class="w-100 text-center">
        <h1 class=" mt-5">Photos</h1>
        <a href="/photos/create" class="btn btn-success text-white shadow-none m-5">Ajouter</a>
    </div>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5">{{ session("message") }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>

                <td>{{ $photo->id }}</td>
                <td>{{ $photo->nom }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $photo->lien) }}" alt=""></td>
                <td>{{ $photo->catégorie }}</td>
                <td>{{ $photo->description }}</td>
                <td class="d-flex">
                    <form action="/photos/{{$photo->id}}/download" method="post">
                        @csrf
                        <button class="btn btn-warning text-white" type="submit">Télécharger</button>
                    </form>
                    <a href="/photos/{{ $photo->id }}/edit"
                        class="btn btn-primary text-white shadow-none ms-3 ">Modifier</a>
                    <form action="/photos/{{ $photo->id }}/delete" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button class="btn btn-danger text-white ms-3" type="submit">Supprimer</button>
                    </form>
                    <a href="/photos/{{$photo->id}}/show" class="btn btn-secondary text-white ms-3" >
                        Show
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection