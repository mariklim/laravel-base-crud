@extends('layout.base')

@section('pageContent')
<h1>Modifica fumetto: {{$comic["title"]}}</h1>

<form action="{{route("comics.update", $comic["id"])}}" method="POST">
	@csrf
	@method('PUT')

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo" value="{{old('title') ? old('title') : $comic['title']}}">
		
		{{-- @error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="type">Tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipo" value="{{old('type') ? old('type') : $comic['type']}}">
		
		{{-- @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>
    <div class="form-group">
		<label for="series">Serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci serie" value="{{old('series') ? old('series') : $comic['series']}}">
		
		{{-- @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>
    <div class="form-group">
		<label for="sale_date">Data vendita</label>
		<input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insersci data di vendita" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
		
		{{-- @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="price">prezzo</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insersci prezzo" value="{{old('price') ? old('price') : $comic['price']}}">
	
		{{-- @error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>


	<div class="form-group">
		<label for="description">Descrizione</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('description') ? old('description') : $comic['description']}}</textarea>
	
		{{-- @error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="thumb">Immagine</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci l'url dell'immagine" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">
	
		{{-- @error('image')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<button type="submit" class="btn btn-primary">Modifica</button>
  </form>

@endsection