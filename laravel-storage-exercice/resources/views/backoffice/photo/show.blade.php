@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Photos</h1>
        <a href={{route('photos')}} class="btn btn-danger text-white">Retour</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Description</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $photos->id }}</td>
                <td>{{ $photos->nom }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $photos->lien) }}" alt=""></td>
                <td>{{ $photos->catégorie }}</td>
                <td>{{ $photos->description }}</td>
            </tr>
        </tbody>
    </table>
</main>
@endsection