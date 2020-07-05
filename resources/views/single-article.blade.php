@extends('layouts.master')

@section('main-content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-default">
				<div class="card-header">
					{{$a[0]->judul}}
					<i>{{$a[0]->created_at}}</i>
				</div>

				<div class="card-body">
					{{$a[0]->isi}}
				</div>

				<div class="card-footer">
					@foreach($tag as $k)
						<button class="btn btn-success">{{$k}}</button>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection