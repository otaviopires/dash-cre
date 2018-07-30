@extends('layouts.app')

@section('content')

	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>Algar Telecom</p>
		<p>
			<a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">{{ __('Entrar') }}</a> 
		</p>
		</div>
		
@endsection
