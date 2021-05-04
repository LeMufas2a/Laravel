@extends('layout.app')
@section('content')
<section class="container">
    <h2 class="text-center my-4">Edit Eleves</h2>
    <form method="POST" action="/eleve/{{$eleves->id}}/update">
        @csrf
        <div class="mb-3">
            <label " class=" form-label">Nom</label>
            <input type="text" class="form-control" value="{{$eleves ->name}}" name="name">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Prenom</label>
            <input type="text" class="form-control" value="{{$eleves->prenom}}" name="prenom">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Age</label>
            <input type="text" class="form-control" value="{{$eleves->age}}" name="age">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Date de naissance</label>
            <input type="date" name="datedn" id="" value="{{$eleves->ddn}}">
        </div>
        <div class="mb-3">
            <label " class=" form-label">Age</label>
            <input  type="text" class="form-control" value="{{$eleves->nationalité}}" name="natio">
        </div>

        <button type="submit" class="btn btn-warning shadow-none ms-2">Update</button>
        <a class="btn btn-danger text-white" href={{route('eleve')}}>Annuler</a>
    </form>
</section>
@endsection