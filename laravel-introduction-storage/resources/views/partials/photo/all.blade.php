@extends('layout.app')
@section('content')
    <main id="main">
        <a href="/image/create" class="btn btn-success shadow-none m-5">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Url</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>

                        <td>{{ $image->id }}</td>
                        <td>{{ $image->nom }}</td>
                        <td><img style="width: 14%" src="{{ asset('img/' . $image->path) }}" alt=""></td>
                        <td>{{ $image->description }}</td>
                        <td class="d-flex">
                            <a href="/image/{{ $image->id }}/edit" class="btn btn-warning shadow-none ">Edit</a>
                            <form action="/image/{{ $image->id }}/delete" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button class="btn btn-danger ms-3" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection
