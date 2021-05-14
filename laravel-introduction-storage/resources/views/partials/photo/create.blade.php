@extends('layout.app')
@section('content')
    <main id="main ">

        <form action="/image/store" class="d-flex justify-content-center  mt-5" method="POST" enctype="multipart/form-data">
            @csrf
            <ul class="bg-danger">
                @foreach ($errors->all() as $message)
                <li >{{$message}}</li>
                @endforeach
            </ul>
            <label>Nom : </label>
            <input  type="text" name="nom">

            <label>Url : </label>
            <input type="file" name="path">
            <label>Decription : </label>
            <input type="text" name="description">
            <button type="submit" class="btn btn-warning ml-5">Create</button>
        </form>
    </main>
@endsection
