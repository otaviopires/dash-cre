@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Lista de postagens</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
						<h3>
							<a href="{{route('posts.create')}}" class='btn btn-primary'>Criar postagem</a>
						</h3>
						@if(count($posts) > 0)
							<h3 class='card-text'>Suas postagens</h3>
							<table class='table table-striped'>
							<tr>
								<th>Título</th>
								<th></th>
								<th></th>
							</tr>
							@foreach($posts as $post)
								<tr>
									<td>{{$post->title}}</td>
									<td><a href='/posts/{{$post->id}}/edit' class='btn btn-info float-right'>Editar</a></td>
									<td>
										{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
											{{Form::hidden('_method', 'DELETE')}}
											{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
										{!! Form::close() !!}
									</td>
								</tr>
							@endforeach
						@else
							<p>Você ainda não tem nenhuma postagem</p>
						@endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
