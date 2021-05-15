@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Albums</h1>
        <a href="/albums/create" class="btn btn-success shadow-none text-white ">Ajouter</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->nom }}</td>
                <td>{{ $album->description }}</td>
                <td class="d-flex">
                    <form action="/albums/{{$album->id}}/download" method="post">
                        @csrf
                        <button class="btn btn-warning text-white " type="submit">Télécharger</button>
                    </form>
                    <a href="/albums/{{ $album->id }}/edit" class="btn btn-primary text-white shadow-none ms-3 ">Modifier</a>
                    <form action="/albums/{{ $album->id }}/delete" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button class="btn btn-danger text-white ms-3" type="submit">Supprimer</button>
                    </form>
                    <a href="/albums/{{$album->id}}/show" class="btn btn-secondary text-white ms-3" >
                        Show
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
@endsection