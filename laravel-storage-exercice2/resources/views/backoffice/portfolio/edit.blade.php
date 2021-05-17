@extends('layout.app')
@section('content')
<main id="main w-100 d-flex justify-content-center flex-column align-items-center ">
    <div class="text-center w-100">
        <h1 class="mt-5">Portfolios</h1>
    </div>
    <form action="/portfolios/{{$portfolios->id}}/update"
        class=" d-flex justify-content-start flex-column  align-items-center mt-5" method="POST"
        enctype="multipart/form-data">
        @csrf

        <label>Nom : </label>
        <input type="text" name="nom" value="{{$portfolios->nom}}">


        <label>Description : </label>
        <input type="text" name="description" value="{{$portfolios->description}}">

        <div>
            <label class="form-label text-center ms-5 ps-4">Catégorie : </label>
            <select class="form-select" name="categorie">
                <option selected>Choissisez une Catégorie</option>
                <option value="Sports">Wifi</option>
                <option value="Games">Internet Explorer</option>
                <option value="Neutres">Chrome</option>
            </select>
        </div>

        <label>Image:</label>
        <input type="file" name="image">
        <div class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('portfolios')}} class=" mt-3 btn btn-danger ">Annuler </a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Modifier</button>
        </div>
    </form>

</main>
@endsection