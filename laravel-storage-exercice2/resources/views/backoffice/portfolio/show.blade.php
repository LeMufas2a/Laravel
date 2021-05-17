@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Galeries</h1>
        <a href={{route('portfolios')}} class="btn btn-danger text-white">Retour</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $portfolios->id }}</td>
                <td>{{ $portfolios->nom }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $portfolios->image) }}" alt=""></td>
                <td>{{ $portfolios->categorie }}</td>
                <td>{{ $portfolios->description }}</td>

            </tr>
        </tbody>
    </table>
</main>
@endsection