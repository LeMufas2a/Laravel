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
            <th scope="col">Nationalité</th>
            <th scope="col">Supression</th>
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
            <td>{{$eleve ->nationalité  }}</td>
            <td>
                <form action="/eleve/{{$eleve->id}}/delete" method="post">
                    @csrf
                    <button class="btn btn-danger w-50 text-white " type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection