@extends('layout.app')
@section('content')
<main id="main ">
    <div class="text-center w-100">
        <h1 class="mt-5">Photos</h1>
    </div>
    <form class="d-flex justify-content-start flex-column  align-items-center mt-5" enctype="multipart/form-data"
        action="/photos/store" method="POST">
        <form action="/photos/store" class="d-flex justify-content-center  mt-5" method="POST"
            enctype="multipart/form-data">
            @csrf
            <ul class="alert-danger">
                @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            <label>Nom : </label>
            <input type="text" name="nom">

            <label>Url : </label>

            <input type="file" name="lien">
            <div>
                <label class="form-label">Categorie</label>
                <select class="form-select" name="catégorie">
                    <option selected>Choisissez une categorie</option>
                    <option value="Nudiste">Nudiste</option>
                    <option value="Voyeur">Voyeur</option>
                    <option value="BBC">BBC</option>
                    <option value="BDSM">BDSM</option>
                    <option value="BDSM">Hentai</option>
                </select>
            </div>

            <label>Decription : </label>

            <input type="text" name="description">


            <div class="text-center d-flex flex-column mt-3" style="width: 150px">
                <a href={{route('photos')}} class=" mt-3 btn btn-danger text-white">Annuler la création</a>
                <button type="submit" class=" mt-3 btn btn-warning ml-5">Ajouter</button>
            </div>
        </form>

</main>
@endsection