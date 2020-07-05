@extends('layouts.master')

@section('main-content')
		<form action="/artikel/{{$a[0]->article_id}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Judul Article</label>
				<input type="text" name="judul" class="form-control" value="{{ $a[0]->judul}}">
			</div>
			<div class="form-group">
				<label>Isi Article</label>
				<textarea name="isi" class="form-control">{{ $a[0]->isi}}</textarea>
			</div>
			<div class="form-group">
				<label>Tag Article</label>
				<input type="text" name="tag" class="form-control" value="{{ $a[0]->tag}}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
@endsection