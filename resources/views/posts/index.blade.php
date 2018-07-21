@extends('layouts.app')

@section('content')
    <h1>Fórum</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class='card'>
				<div class='row'>
					<div class='col-md-4 col-sm-4'>
						<img style="width:70%" src="storage/cover_images/{{$post->cover_image}}">
					</div>
					<div class='col-md-8 col-sm-8'>				
						<h3><a href="/posts/{{$post->id}}" class="">{{$post->title}}</a></h3>
						<small>Criado em {{$post->created_at}} por {{$post->user->name}}</small>
					</div>
				</div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Não há postagens :/</p>
    @endif

@endsection
