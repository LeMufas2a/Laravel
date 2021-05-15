@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5">Albums</h1>
        <a href={{route('albums')}} class="btn btn-danger text-white">Retour</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $albums->id }}</td>
                <td>{{ $albums->nom }}</td>
                <td>{{ $albums->description }}</td>
            </tr>
        </tbody>
    </table>
</main>
@endsection