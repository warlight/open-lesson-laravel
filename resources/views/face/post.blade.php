@extends('master')

@section('title', 'Пост ' . $post->title)

@section('content')
	{{ $post->title }}
	<br>
	{!! $post->body !!}
@endsection