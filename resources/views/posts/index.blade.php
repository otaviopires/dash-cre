@extends('layouts.app')

@section('content')
    <h1>Postagens</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class='card m-3 p-2'>
                <h3><a href="/posts/{{$post->id}}" class="">{{$post->title}}</a></h3>
                <small>Criado em {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Não há postagens :/</p>
    @endif

@endsection
