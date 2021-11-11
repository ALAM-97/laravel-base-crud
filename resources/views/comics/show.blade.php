@extends('layout.base')

@section('pageContent')
<div class="container text-center">
    <h1 class="mt-5">{{$comic['title']}}</h1>
    <h3>{{$comic['series']}}</h3>
    <img src="{{$comic['image']}}" alt="">
    <p class="mt-4">{{$comic['description']}}</p>
    <h5>Prezzo: {{$comic['price']}}$</h5>
    <div>
        <a href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-secondary mt-2">Edit</button></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#staticBackdrop">
        Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Stai eliminando un elemento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Sicuro di voler eliminare? La cancellazione è irreversibile
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="{{route('comics.destroy', $comic['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button></a>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    
@endsection