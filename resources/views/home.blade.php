@extends('layouts.layout')

@section('title', 'Homepage')

@section('content')
	<h1>Trending now</h1>
 	@foreach ($posts as $post)
		<h2>{{ $post["body"] }}</h2>
		 
	@endforeach
@endsection 
