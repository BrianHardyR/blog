@extends('layout/master')
@section('suf-title')
	Post - {{ $post->id }}
@endsection
@section('post')
  active
@endsection
@section('content')
	<h1>
		{{ $post->title }}
	</h1>
	<p>{{ $post->body }}</p>
	<a href="/posts"> Go Back</a> &nbsp
	<a href="/create">Edit</a>
	
@endsection