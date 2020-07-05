@extends('layouts.master')

@section('main-content')
		<form action="/artikel" method="post">
			@csrf
			<div class="form-group">
				<label>Judul Article</label>
				<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Article</label>
				<textarea name="isi" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Tag Article</label>
				<input type="text" name="tag" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
@endsection