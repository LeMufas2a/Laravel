@extends('layout.app')
@section('content')
@include('partials.nav')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Numéro de téléphone</th>
            <th>Add/Edit/Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($biblios as $biblio)
        <tr class="w-100">
            <th scope="row">{{$biblio->id}}</th>
            <td>{{$biblio->nom}}</td>
            <td>{{$biblio->adresse}}</td>
            <td>{{$biblio->num}}</td>
            <td>
                <form action="/bibliothèque/{{$biblio->id}}/delete" method="POST">
                    @csrf
                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection