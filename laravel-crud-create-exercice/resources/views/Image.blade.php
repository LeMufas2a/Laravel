@extends('layout.app')
@section('content')
@include('partials.nav')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th>Add/Edit/Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($img as $image)
        <tr class="w-100">
            <th scope="row">{{$image->id}}</th>
            <td>{{$image->image}}</td>
            <td>{{$image->description}}</td>
            <td>
                <form action="/images/{{$image->id}}/delete" method="POST">
                    @csrf
                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection