@extends('layout.app')
@section('content')
@include('partials.nav')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Photo</th>
            <th>Add/Edit/Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="w-100">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->photo}}</td>
            <td>
                <form action="/users/{{$user->id}}/delete" method="POST">
                    @csrf
                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection