@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci titolo" value="{{ old('title') }}">

		{{-- @error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="type">Tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipo" value="{{ old('type') }}">

		{{-- @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

    <div class="form-group">
		<label for="type">Serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci serie" value="{{ old('type') }}">

		{{-- @error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>
	<div class="form-group">
		<label for="thumb">Immagine</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci immagine" value="{{ old('thumb') }}">

		{{-- @error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
		<input type="number" class="form-control" id="weight" name="price" placeholder="Insersci prezzo" value="{{ old('price') }}">

		{{-- @error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>
    <div class="form-group">
		<label for="sale_date">Data</label>
		<input type="text" class="form-control" id="weight" name="sale_date" placeholder="Insersci la data di vendita" value="{{ old('price') }}">

		{{-- @error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>

	<div class="form-group">
		<label for="description">Descrizione prodotto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('description')}}</textarea>

		{{-- @error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror --}}
	</div>



	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection

