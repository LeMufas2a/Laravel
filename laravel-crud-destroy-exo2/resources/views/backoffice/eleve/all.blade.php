@extends('layout.app')
@section('content')
@include('partials.nav')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Age</th>
            <th scope="col">Birdtday</th>
            <th scope="col">Nationalit√©</th>
            <th scope="col">Modifer/Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eleves as $eleve)
        <tr class="w-100">
            <th scope="row">{{$eleve ->id}}</th>
            <td>{{$eleve ->name}}</td>
            <td>{{$eleve ->prenom}}</td>
            <td>{{$eleve ->age}}</td>
            <td>{{$eleve ->ddn}}</td>
            <td>{{$eleve ->nationalit√©  }}</td>
            <td class="d-flex">
                <a class="btn btn-warning shadow-none " href="/eleve/{{$eleve->id}}/edit">Edit</a>
                <form action="/eleve/{{$eleve->id}}/delete" method="post">
                    @csrf
                    <button class="btn btn-danger ms-2  text-white " type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection