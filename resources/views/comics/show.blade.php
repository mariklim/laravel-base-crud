@extends('layout.base')

@section('pageContent')
<h1>{{$comic['title']}}</h1>
<h3>prezzo: {{$comic['price']}}</h3>
<p>
	{!!$comic['description']!!}
</p>

@endsection