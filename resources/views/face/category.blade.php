@extends('master')

@section('title', 'Категория ' . $category->title)

@section('content')
	@foreach($category->posts as $post)
		<a href="{{ route('post', [$category->slug, $post->slug]) }}">
			{{ $post->title }}
		</a>
	@endforeach
@endsection