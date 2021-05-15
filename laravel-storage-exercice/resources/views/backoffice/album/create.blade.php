@extends('layout.app')
@section('content')
<main id="main ">

    <form class="d-flex justify-content-start flex-column  align-items-center mt-5" enctype="multipart/form-data"
        action="/albums/store" method="POST">
        @csrf
        <ul class="bg-danger">
            @foreach ($errors->all() as $message)
            <li class="text-white">{{$message}}</li>
            @endforeach
        </ul>
        <label>Nom : </label>
        <input type="text" name="nom">

        <label>Description : </label>
        <input type="text" name="description" style="height: 250px;">



        <div class="text-center d-flex flex-column mt-3" style="width: 150px">
            <a href={{route('albums')}} class="btn mt-3 btn-danger text-white">Annuler la création</a>
            <button type="submit" class=" mt-3 btn btn-warning ml-5">Ajouter</button>
        </div>
    </form>

</main>
@endsection