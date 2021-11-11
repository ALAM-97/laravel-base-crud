@extends('layout.base');

@section('pageContent')
    <div class="container mt-5">
        <h1 class="text-center">Lista di tutti i Comics</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Description</th>
                <th scope="col">Poster</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic['id']}}</th>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['series']}}</td>
                        <td>{{$comic['description']}}</td>
                        <td><img src="{{$comic['image']}}" alt=""></td>
                        <td>{{$comic['price']}}$</td>
                        <td>
                            <a href="{{route('comics.show', $comic['id'])}}"><button type="button" class="btn btn-primary">Check</button></a>
                            <a href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-secondary mt-2">Edit</button></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#staticBackdrop">
                                Delete row: {{$comic['id']}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Eliminare?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sicuro di voler eliminare la riga {{$comic['id']}}? La cancellazione è irreversibile.
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection



