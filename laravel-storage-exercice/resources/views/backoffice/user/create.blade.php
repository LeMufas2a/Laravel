@extends('layout.app')
@section('content')
<main id="main ">

    <form class="d-flex justify-content-start flex-column  align-items-center mt-5" enctype="multipart/form-data"
        action="/users/store" method="POST">
        @csrf
        <ul class="bg-danger">
            @foreach ($errors->all() as $message)
            <li class="text-white">{{$message}}</li>
            @endforeach
        </ul>
        <label>Nom : </label>
        <input type="text" name="nom">

        <label>Prenom : </label>

        <input type="password" name="prenom">
        <label>Age : </label>
        <input type="number" name="age">

        <label>Email : </label>
        <input type="email" name="email">

        <label>Password : </label>
        <input type="password" name="password">

        <label>Photo:</label>
        <input type="file" name="picture">
        <div c class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('users')}} class="btn mt-3 btn-danger text-white">Annuler la création</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Ajouter</button>
        </div>
    </form>

</main>
@endsection