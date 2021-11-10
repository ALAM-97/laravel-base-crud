@extends('layout.base')

@section('pageContent')
<div class="container">
    <h1>{{$comic['title']}}</h1>
    <h3>{{$comic['series']}}</h3>
    <img src="{{$comic['image']}}" alt="">
    <p>{{$comic['description']}}</p>
    <h5>Prezzo: {{$comic['price']}}$</h5>
</div>
    
@endsection