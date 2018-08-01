@extends('layouts.app')

@section('content')

	<h1>Links úteis</h1>
	@if(count($links) > 0)
		<ul class='list-group'>
			@foreach($links as $link)
				<li class='list-group-item'>{{$link->name}}</li>
			@endforeach
		</ul>
	@endif
	
@endsection
