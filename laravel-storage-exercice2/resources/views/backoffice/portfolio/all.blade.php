@extends('layout.app')
@section('content')
<main id="main">
    <div class="w-100 text-center">
        <h1 class="mt-5 text-white">Portfolios</h1>
        <a href="/portfolios/create" class="btn btn-success shadow-none text-white ">Ajouter</a>
    </div>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
                <td>{{ $portfolio->id }}</td>
                <td>{{ $portfolio->nom }}</td>
                <td>{{ $portfolio->categorie }}</td>
                <td>{{ $portfolio->description }}</td>
                <td><img style="width: 14%" src="{{ asset('img/' . $portfolio->image) }}" alt=""></td>
                <td>
                    <div class="d-flex">
                        <form action="/portfolios/{{$portfolio->id}}/download" method="post">
                            @csrf
                            <button class="btn btn-warning " type="submit">Télécharger</button>
                        </form>
                        <a href="/portfolios/{{ $portfolio->id }}/edit"
                            class="btn btn-primary  shadow-none ms-3 ">Modifier</a>
                        <form action="/portfolios/{{ $portfolio->id }}/delete" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-danger ms-3" type="submit">Supprimer</button>
                        </form>
                        <a href="/portfolios/{{$portfolio->id}}/show" class="btn btn-secondary  text-dark ms-3">
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