@extends('layout/master')
@section('suf-title')
	Post
@endsection
@section('post')
  active
@endsection
@section('content')
	<h1>
		My Posts
	</h1>
	
	@foreach($Posts as $post)
		<a href="/posts/{{ $post->id }}">
				<h3>{{ $post->title }}</h3>
			</a>
		
				<p>{{ $post->body }}</p>
			
			
	@endforeach
	
@endsection