@extends('layout.base');

@section('pageContent')
    <div class="container">
        <h1>Lista di tutti i Comics</h1>
        <table class="table table-dark table-striped mt-3">
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
                        <td><a href="{{route('comics.show', $comic['id'])}}"><button type="button" class="btn btn-primary">Check</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection