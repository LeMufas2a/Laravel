@extends('layout.app')
@section('content')
<main id="main w-100 d-flex justify-content-center flex-column align-items-center ">
    <div class="text-center w-100">
        <h1 class="mt-5">Users</h1>
    </div>
    <form action="/users/{{$users->id}}/update"
        class=" d-flex justify-content-start flex-column  align-items-center mt-5" method="POST"
        enctype="multipart/form-data">
        @csrf

        <label>Nom : </label>
        <input type="text" name="nom" value="{{$users->nom}}">

        <label>Prenom : </label>
        <input type="text" name="prenom" value="{{$users->prenom}}">

        <label>Age : </label>
        <input type="number" name="age" value="{{$users->age}}">

        <label>Email : </label>
        <input type="email" name="email" value="{{$users->email}}">

        <label>Password : </label>
        <input type="password" name="password" value="{{$users->password}}">

        <label>Photo:</label>
        <input type="file" name="picture">
        <div class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('users')}} class=" mt-3 btn btn-danger text-white">Annuler la modification</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Modifier</button>
        </div>
    </form>

</main>
@endsection