@extends('layout.app')
@section('content')
@include('backoffice.navOffice')
<main id="main">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Icone</th>
                <th scope="col">Chiffre</th>
                <th scope="col">Texte</th>
                <th>Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facts as $fact)
            <tr>
                <th scope="row">{{$fact->id}}</th>
                <td>{{$fact->icone}}</td>
                <td>{{$fact->chiffre}}</td>
                <td>{{$fact->texte}}</td>
                <td class="d-flex">
                    <a href="/backoffice/facts/{{$fact->id}}/edit" class="btn btn-danger shadow-none ">Edit</a>
                    <form action="/backoffice/facts/{{$fact->id}}/delete" method="POST">
                        @csrf
                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
</main>
@endsection