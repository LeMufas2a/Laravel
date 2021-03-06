@extends('layout.app')
@section('content')
@include('partials.nav')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Adresse</th>
            <th scope="col">Description</th>
            <th scope="col">Supression</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($batiments as $batiment)
        <tr class="w-100">
            <th scope="row">{{$batiment ->id}}</th>
            <td>{{$batiment ->name}}</td>
            <td>{{$batiment ->adresse}}</td>
            <td>{{$batiment ->description}}</td>
            <td class="d-flex">
                <a class="btn btn-warning shadow-none " href="/batiment/{{$batiment->id}}/edit">Edit</a>
                <form action="/batiment/{{$batiment->id}}/delete" method="post">
                    @csrf
                    <button class="btn btn-danger ms-2 text-white " type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection