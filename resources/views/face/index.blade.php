@extends('master')

@section('title', 'Главная страница')

@section('content')
	@foreach($categories as $category)
		<a href="{{ route('category', $category->slug) }}">
			{{ $category->title }}
		</a>
	@endforeach

	{{ $categories->links() }}
@endsection