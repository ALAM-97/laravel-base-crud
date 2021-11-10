@extends('layout.base')

@section('pageContent')
<div class="container">
    <h1>Inserisci un nuovo comic</h1>
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="description" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Insert Title">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" aria-describedby="emailHelp" placeholder="Insert Series">
    </div>
    <div class="mb-3 form-check">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insert Description"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="Insert Image URL">
    </div>
    <div class="mb-3 form-check">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Insert Price">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection