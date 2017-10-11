@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Categories</div>
					<div class="panel-body">
						@if($categories->count() > 0)
							<table class="table">
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Count</th>
									<th>Actions</th>
								</tr>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->id }}</td>
										<td>{{ $category->title }}</td>
										<td>{{ $category->posts->count() }}</td>
										<td>
											<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
												<a type="button" class="btn btn-default" href="{{ route('categories.edit', $category->id) }}">edit</a>
												{{ method_field('DELETE') }}
												{{ csrf_field() }}
												<button type="submit" class="btn btn-danger">delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							</table>
						@else
							No categories
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection