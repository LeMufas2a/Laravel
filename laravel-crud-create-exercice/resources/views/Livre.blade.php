@extends('layout.app')
@section('content')
@include('partials.nav')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date de Publication</th>
            <th scope="col">Nombre de pages</th>
            <th scope="col">Version mobile</th>
            <th>Add/Edit/Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livres as $livre)
        <tr class="w-100">
            <th scope="row">{{$livre->id}}</th>
            <td>{{$livre->titre}}</td>
            <td>{{$livre->auteur}}</td>
            <td>{{$livre->dateDePub}}</td>
            <td>{{$livre->ndpages}}</td>
            <td>{{$livre->vMobile}}</td>
            <td>
                <form action="/livres/{{$livre->id}}/delete" method="POST">
                    @csrf
                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection