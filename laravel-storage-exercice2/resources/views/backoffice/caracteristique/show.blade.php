@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center text-white">
        <h1 class="mt-5">Services</h1>
        <a href={{route('services')}} class="btn btn-danger text-white">Retour</a>
    </div>
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
            <tr>
                <td>{{ $caracs->id }}</td>
                <td>{{ $caracs->nom }}</td>
                <td> <i class="fab {{ $caracs->icone }}"></i></td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</main>
@endsection