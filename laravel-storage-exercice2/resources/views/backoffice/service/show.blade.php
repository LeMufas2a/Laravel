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
                <th scope="col">Icone</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $services->id }}</td>
                <td> <i class="fab {{ $services->icone }}"></i></td>
                <td>{{ $services->titre }}</td>
                <td>{{ $services->description }}</td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</main>
@endsection