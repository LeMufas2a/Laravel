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
        <input type="text" name="titre">

        <label>Description : </label>
        <input type="text" name="description">

    </form>

</main>
@endsection