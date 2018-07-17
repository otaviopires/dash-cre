@extends('layouts.app')

@section('content')
    <h1>Edite seu post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Título')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Título'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Corpo do texto')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo do texto'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
		{{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection