@extends('layout.app')
@section('content')
@include('backoffice.navOffice')
<main id="main ">

    <form action="/backoffice/facts/{{$facts ->id}}/update" class="d-flex justify-content-center  mt-5" method="POST">
        @csrf
        <label>Icone : </label>
        <input type="text" name="icone" value="{{$facts->icone}}">
        <br>
        <label>Chiffre : </label>

        <input type="number" name="chiffre" value="{{$facts->chiffre}}">
        <label>Texte : </label>

        <input type="text" name="texte" value="{{$facts->texte}}">
        <br>
        <button class="btn btn-warning ml-5">Update</button>
    </form>

</main>
@endsection