@extends('layout.app')
@section('content')
@include('partials.nav')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Nombre</th>
            <th scope="col">Hors Condition</th>
            <th scope="col">Description</th>
            <th scope="col">Supression</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
        <tr class="w-100">
            <th scope="row">{{$formation ->id}}</th>
            <td>{{$formation ->name}}</td>
            <td>{{$formation ->nombre}}</td>
            <td>{{$formation ->horsCondition}}</td>
            <td>{{$formation ->description}}</td>
            <td class="d-flex">
                <a class="btn btn-warning shadow-none " href="/formation/{{$formation->id}}/edit">Edit</a>
                <form action="/formation/{{$formation->id}}/delete" method="post">
                    @csrf
                    <button class="btn btn-danger ms-2  text-white " type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection