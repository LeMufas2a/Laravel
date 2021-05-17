@extends('layout.app')
@section('content')
<main id="main ">
    <form class="d-flex justify-content-start flex-column  align-items-center mt-5" enctype="multipart/form-data"
        action="/portfolios/store" method="POST">
        @csrf
        <ul class="bg-danger">
            @foreach ($errors->all() as $message)
            <li class="text-white">{{$message}}</li>
            @endforeach
        </ul>
        @csrf

        <label>Nom : </label>
        <input type="text" name="nom">


        <label>Description : </label>
        <input type="text" name="description">

        <label>Image:</label>
        <input type="file" name="image">
        <div>
            <label class="form-label text-center ms-5 ps-4">Catégorie : </label>
            <select class="form-select" name="categorie">
                <option selected>Choissisez une Catégorie</option>
                <option value="Sports">Wifi</option>
                <option value="Games">Internet Explorer</option>
                <option value="Neutres">Chrome</option>
            </select>
        </div>
        <div c class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('portfolios')}} class="btn mt-3 btn-danger ">Annuler</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Ajouter</button>
        </div>
    </form>

</main>
@endsection