@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5 text-white">Galeries</h1>
        <a href={{route('galeries')}} class="btn btn-danger text-white">Retour</a>
    </div>
    <table class="table">
        <thead>
            <tr class="text-white">
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody> 
            <tr class="text-white">
                <td>{{ $galeries->id }}</td>
                <td>{{ $galeries->nom }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $galeries->image) }}" alt=""></td>
                <td>{{ $galeries->description }}</td>

            </tr>
        </tbody>
    </table>
</main>
@endsection