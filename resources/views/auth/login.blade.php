@extends('layouts.app')

@section('content')



	<div class="limiter">
		<div class="container-login100" style="background-image: url('/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
					@csrf
					<div class="login100-form-avatar">
						<img src="/images/avatar-01.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Dashboard Corporativo
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" placeholder="Usuário" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" placeholder="Senha" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="form-group container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn">
							{{ __('Entrar') }}
                        </button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="{{ route('password.request') }}" class="txt1">
							Esqueceu sua senha?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="{{ route('register') }}">
							Cadastre-se
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


 
@endsection
