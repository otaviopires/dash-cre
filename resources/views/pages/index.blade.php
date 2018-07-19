@extends('layouts.app')

@section('content')

	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>Algar Telecom</p>
		<p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">{{ __('Login') }}</a> <a class="btn btn-success btn-lg" href="/register" role="button">Registrar</a></p>
		<!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
		</div>
		
@endsection
