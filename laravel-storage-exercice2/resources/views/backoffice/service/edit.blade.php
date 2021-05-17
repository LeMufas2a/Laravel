@extends('layout.app')
@section('content')
<main id=" main w-100 d-flex justify-content-center flex-column align-items-center ">
    <div class="text-center w-100 text-white">
        <h1 class="mt-5">Services</h1>
    </div>
    <form action="/services/{{$services->id}}/update"
        class=" text-white d-flex justify-content-start flex-column  align-items-center mt-5" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div>
            <label class="form-label text-center ms-5 ps-4">Icone : </label>
            <select class="form-select" name="icone">
                <option selected>Choisissez une Icone</option>
                <option value="fa-facebook-f">Facebook</option>
                <option value="fa-twitter">Twitter</option>
                <option value="fa-youtube">Youtube</option>
                <option value="fa-amazon">Amazon</option>
                <option value="fa-google">Google</option>
                <option value="fa-firefox">Firefox</option>
                <option value="fa-safari">Safari</option>
                <option value="fa-wifi">Wifi</option>
                <option value="fa-internet-explorer">Internet Explorer</option>
                <option value="fa-chrome">Chrome</option>
            </select>
        </div>

        <label>Titre : </label>
        <input type="text" name="titre" value="{{$services->titre}}">

        <label>Description : </label>
        <input type="text" name="description" value="{{$services->description}}">

        <div class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('services')}} class=" mt-3 btn btn-danger text-white">Annuler</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Modifier</button>
        </div>
    </form>

</main>
@endsection