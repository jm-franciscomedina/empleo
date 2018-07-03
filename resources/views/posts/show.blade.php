@extends('layouts.layout')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{$post->title}} </h1>
			<hr>
			<h1>Pubicado por: {{$post->user->name}}</h1>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{$post->published_at->format('M d')}}</h4>
					<h2>categoria:</h2> <a href="categoria/{{$post->category->slug}}">{{$post->category->name}}</a>
				</div>
				<div class="panel-body">
					{{$post->excerpt}}
					<hr>
						{!!$post->body!!}
					<hr>
					<h4>
						@foreach($post->tags as $tag)
           					<a href="etiqueta/{{ $tag->slug}}">  #{{$tag->name}} </a>
        				@endforeach
					</h4>
				</div>
			</div>
		</div>
	</div> 
@stop

