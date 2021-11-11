@extends('layout.base')

@section('pageContent')
<div class="container mt-5">
    <h1>Modifica Comic: <strong>{{$comic['title']}}</strong></h1>
<form action="{{route('comics.update', $comic['id'])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Insert Title" value="{{old('title') ? old('title') : $comic->title}}">
        @error('title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" aria-describedby="emailHelp" placeholder="Insert Series" value="{{old('series') ? old('series') : $comic->series}}">
        @error('series')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" aria-describedby="emailHelp" placeholder="Insert Description">{{old('description') ? old('description') : $comic->description}}</textarea>
        @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="Insert Image URL" value="{{old('image') ? old('image') : $comic->image}}">
        @error('image')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Insert Price" value="{{old('price') ? old('price') : $comic->price}}">
        @error('price')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
@endsection