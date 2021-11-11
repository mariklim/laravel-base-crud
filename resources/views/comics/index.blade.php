@extends('layout.base')

@section('pageContent')
<h1>Lista di tutti i fumetti</h1>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Descrizione</th>
		<th scope="col">Immagine</th>
		<th scope="col">Data</th>
		<th scope="col">Tipo</th>
        <th scope="col">Prezzo</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["title"]}}</td>
		<td>{{$comic["description"]}}</td>
		<td>{{$comic["thumb"]}}</td>
		<td>{{$comic["sale_date"]}}</td>
        <td>{{$comic["type"]}}</td>
        <td>{{$comic["price"]}}</td>
		<td>
			{{-- <a href="{{route("products.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a> --}}
		</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection