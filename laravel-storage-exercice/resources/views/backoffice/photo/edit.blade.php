@extends('layout.app')
@section('content')
<main id="main ">
    <div class="text-center w-100">
        <h1 class="mt-5">Photos</h1>
    </div>

    <form action="/photos/{{$photos->id}}/update" class="d-flex justify-content-center  mt-5" method="POST"
        enctype="multipart/form-data">
        @csrf
        <ul class="alert-danger">
            @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        <label>Nom : </label>
        <input type="text" name="nom" value="{{$photos->nom}}">

        <label>Url : </label>

        <input type="file" name="lien" value="{{asset('img/' . $photos ->lien)}}">

        <label>Catégorie : </label>

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

        <input type="text" name="description" value="{{$photos->description}}">


        <div  class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('photos')}} class="btn mt-3 btn-danger text-white">Annuler la modification</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Modifier</button>
        </div>
    </form>

</main>
@endsection