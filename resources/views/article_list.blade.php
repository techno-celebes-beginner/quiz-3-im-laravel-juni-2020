@extends('layouts.master')

@section('main-content')
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-lg-12">
			<a class="btn btn-primary" href="/artikel/create">Buat Artikel</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 table-responsive">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Judul</th>
						<th>Isi</th>
						<th>Tag</th>
						<th>Slug</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($article_list as $al)
					<tr>
						<td><a href="/artikel/{{$al->article_id}}">{{$al->judul}}</a></td>
						<td>{{$al->isi}}</td>
						<td>{{$al->tag}}</td>
						<td>{{$al->slug}}</td>
						<td>
							<a class="btn btn-primary" href="/artikel/{{$al->article_id}}/edit">Edit</a>
							<form action="/artikel/{{$al->article_id}}" method="POST">
								@csrf
								@method("DELETE")
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush