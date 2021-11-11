@extends('layout.base')

@section('pageContent')
<div class="container mt-5">
    <h1>Inserisci un nuovo comic</h1>
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="description" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" aria-describedby="emailHelp" placeholder="Insert Title" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror"" id="series" name="series" aria-describedby="emailHelp" placeholder="Insert Series"  value="{{old('series')}}">
        @error('series')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror"" name="description" id="description" cols="30" rows="10" aria-describedby="emailHelp" placeholder="Insert Description">{{old('description')}}</textarea>
        @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror"" id="image" name="image" aria-describedby="emailHelp" placeholder="Insert Image URL"  value="{{old('image')}}">
        @error('image')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror"" id="price" name="price" aria-describedby="emailHelp" placeholder="Insert Price"  value="{{old('price')}}">
        @error('price')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection