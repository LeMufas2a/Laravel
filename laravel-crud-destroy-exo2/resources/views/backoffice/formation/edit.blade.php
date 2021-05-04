@extends('layout.app')
@section('content')
<section class="container">
    <h2 class="text-center my-4">Edit Formations</h2>
    <form method="POST" action="/formation/{{$formations->id}}/update">
        @csrf
        <div class="mb-3">
            <label " class=" form-label">Nom</label>
            <input type="text" class="form-control" value="{{$formations ->name}}" name="name">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Nombre</label>
            <input class="form-control" type="number" name="nombre" id="" value="{{$formations->nombre}}">
        </div>
        <div class="mb-3">
            <label " class=" form-label">hors condition</label>
            <input class="form-control" type="number" name="hc" id="" value="{{$formations->horsCondition}}">
        </div>
        <div class="mb-3">
            <label class=" form-label">Description</label>
            <textarea class="form-control" id="" cols="30" rows="10"
                name="description">{{$formations ->description}}</textarea> </div>
        <button type="submit" class="btn btn-warning shadow-none">Validé</button>
        <a class="btn btn-danger text-white" href={{route('formation')}}>Annuler</a>
    </form>
</section>
@endsection