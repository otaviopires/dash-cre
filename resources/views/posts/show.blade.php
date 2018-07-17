@extends('layouts.app')

@section('content')
    
    <div class='container m-3'>
		<a href="/posts" class="btn btn-dark my-2">Voltar</a>
		<h1>{{$post->title}}</h1>
		<div>
			{!!$post->body!!}
		</div>

		<hr>
			<small>Escrito em {{$post->created_at}}</small>
		<hr>
			<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Editar</a>
		{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		{!! Form::close() !!}
	</div>
@endsection
