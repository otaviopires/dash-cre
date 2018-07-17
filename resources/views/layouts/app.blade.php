<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
		<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel='stylesheet' href="{{asset('css/app.css')}}">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
        
		<title>{{ config('app.name', 'Portal Corporativo - Algar Telecom') }}</title>
    </head>
    <body>
		@include('inc.navbar')
		<div class='container'>
			@include('inc.messages')
			@yield('content')
		</div>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace( 'article-ckeditor' );
		</script>
    </body>
</html>	