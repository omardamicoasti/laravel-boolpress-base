@extends('layouts.layout')

@section('title', 'Homepage')

@section('content')
	<div class="addNewPost">
		<a href="{{ route("post.create") }}"><i class="fas fa-plus"></i></a>
	</div>
	<h1>Trending now on BoolPress</h1>
 	@foreach ($posts as $post)
	 <div class="postContainer">
		 <div id="left">
			<img src="{{ $post["picture"] }}" alt="profile picture">
		 </div>
		 <div id="right">
			 <div class="possibleActions">
					{{-- <i class="fas fa-trash-alt"> --}}
						<form action="{{route('post.destroy', $post -> id)}}" method="post">
                    	@csrf
                    	@method('DELETE')
                    	<button type="submit"><i class="fas fa-trash-alt"></i></button>
                		</form>
					{{-- </i> --}}
				 <a href="{{ route("post.edit", $post->id) }}"><i class="fas fa-pen"></i></a>
			 </div>
			 <div>
				 <div><h2>{{ $post["user"] }}</h2></div>
				 <div><h5 class="creationDate">{{ $post["updated_at"] }}</h5></div>
			 </div>
			 <div><p>{{ $post["body"] }}</p></div>
			 <div>
				 <a href="#"><i class="far fa-comment"></i></a>
				 <a href="#"><i class="fas fa-retweet"></i></a>
				 <a href="#"><i class="far fa-heart"></i></a>
				 <a href="#"><i class="fas fa-cloud-upload-alt"></i></a>
			 </div>
		 </div>
	 </div>		 
	@endforeach
@endsection 
