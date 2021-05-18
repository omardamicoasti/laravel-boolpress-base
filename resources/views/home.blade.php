@extends('layouts.layout')

@section('title', 'Homepage')

@section('content')
	<h1>Trending now on BoolPress</h1>
 	@foreach ($posts as $post)
	 <div class="postContainer">
		 <div id="left">
			<img src="{{ $post["picture"] }}" alt="">
		 </div>
		 <div id="right">
			 <div class="possibleActions">
				 <a href=""><i class="fas fa-trash-alt"></i></a>
				 <a href=""><i class="fas fa-pen"></i></a>
			 </div>
			 <div>
				 <div><h2>{{ $post["user"] }}</h2></div>
				 <div><h5 class="creationDate">{{ $post["updated_at"] }}</h5></div>
			 </div>
			 <div><p>{{ $post["body"] }}</p></div>
			 <div>
				 <a href=""><i class="far fa-comment"></i></a>
				 <a href=""><i class="fas fa-retweet"></i></a>
				 <a href=""><i class="far fa-heart"></i></a>
				 <a href=""><i class="fas fa-cloud-upload-alt"></i></a>
			 </div>
		 </div>
	 </div>
		{{-- <h2>{{ $post["body"] }}</h2> --}}
		 
	@endforeach
@endsection 
