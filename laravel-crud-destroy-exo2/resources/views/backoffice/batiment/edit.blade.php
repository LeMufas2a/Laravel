@extends('layout.app')
@section('content')
<section class="container">
    <h2 class="text-center my-4">Edit Batiments</h2>
    <form method="POST" action="/batiment/{{$batiments->id}}/update">
        @csrf
        <div class="mb-3">
            <label " class=" form-label">Nom</label>
            <input type="text" class="form-control" value="{{$batiments ->name}}" name="name">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Adresse</label>
            <input type="text" class="form-control" value="{{$batiments->adresse}}" name="adresse">
        </div>
        <div class="mb-3">
            <label class=" form-label">Description</label>
            <textarea class="form-control" id="" cols="30" rows="10"
                name="description">{{$batiments->description}}</textarea> </div>
        <button type="submit" class="btn btn-warning shadow-none">Validé</button>
        <a class="btn btn-danger text-white" href={{route('batiment')}}>Annuler</a>
    </form>
</section>
@endsection