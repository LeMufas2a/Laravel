@extends('layout.app')
@section('content')
<main id="main ">

    <form action="/image/{{$images->id}}/update" class="d-flex justify-content-center  mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nom :  </label>
        <input type="text" name="nom" value="{{$images->nom}}" >
        
        <label>Url : </label>

        <input type="file" name="path" value="{{asset('img/' . $images ->path)}}" >
        <label>Decription : </label>

        <input type="text" name="description"  value="{{$images->description}}">

        
        <button type="submit" class="btn btn-warning ml-5">Update</button>
    </form>

</main>
@endsection