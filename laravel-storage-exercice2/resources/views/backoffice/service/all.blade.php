@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5 text-white">Services</h1>
        <a href="/services/create" class="btn btn-success shadow-none text-white ">Ajouter</a>
    </div>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
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
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td> <i class="fab {{ $service->icone }}"></i></td>
                <td>{{ $service->titre }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <div class="d-flex">
                        <form action="/services/{{$service->id}}/download" method="post">
                            @csrf
                            <button class="btn btn-warning " type="submit">Télécharger</button>
                        </form>
                        <a href="/services/{{ $service->id }}/edit"
                            class="btn btn-primary  shadow-none ms-3 ">Modifier</a>
                        <form action="/services/{{ $service->id }}/delete" method="POST">
                            @csrf
                            <button class="btn btn-danger ms-3" type="submit">Supprimer</button>
                        </form>
                        <a href="/services/{{$service->id}}/show" class="btn btn-secondary  text-dark ms-3">
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