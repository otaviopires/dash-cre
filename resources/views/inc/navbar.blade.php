<!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> -->
	<!-- <div class="container"> -->
		<!-- @guest -->
		<!-- <a class="navbar-brand" href="{{ url('/') }}"> -->
			<!-- {{ config('app.name', 'Laravel') }} -->
		<!-- </a> -->
		<!-- @else -->
		<!-- <a class="navbar-brand" href="{{ url('/ogs') }}"> -->
			<!-- {{ config('app.name', 'Laravel') }} -->
		<!-- </a> -->
		<!-- @endguest -->
		
		
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> -->
			<!-- <span class="navbar-toggler-icon"></span> -->
		<!-- </button> -->

		<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
			<!-- Left Side Of Navbar -->
			<!-- <ul class="navbar-nav mr-auto"> -->
			<!-- @guest -->
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="/about">Sobre nós</a> -->
				<!-- </li> -->
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="/services">Nossos setores</a> -->
				<!-- </li> -->
				<!-- @else -->
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="/ogs/list">Histórico de OGs</a> -->
				<!-- </li> -->
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="/users/list">Suas postagens</a> -->
				<!-- </li>				 -->
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="/posts">Fórum</a> -->
				<!-- </li> -->
			<!-- @endguest -->
			<!-- </ul> -->
			
			<!-- <ul class="navbar-nav mr-auto"> -->

			<!-- </ul> -->
			<!-- Right Side Of Navbar -->
			<!-- <ul class="navbar-nav ml-auto"> -->
			<!-- Authentication Links -->
				<!-- @guest -->
					<!-- <li class="nav-item"> -->
						<!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a> -->
					<!-- </li> -->
				<!-- @else -->
					

				
					<!-- <li class="nav-item dropdown"> -->
						<!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> -->
							<!-- {{ Auth::user()->name }} <span class="caret"></span> -->
						<!-- </a> -->

						<!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
							<!-- <a class="dropdown-item" href="{{ route('register') }}">{{ __('Cadastrar novo usuário') }}</a> -->
							<!-- <a class="dropdown-item" href="{{ route('logout') }}" -->
							   <!-- onclick="event.preventDefault(); -->
											 <!-- document.getElementById('logout-form').submit();"> -->
								<!-- {{ __('Sair') }} -->
							<!-- </a> -->
							
							<!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> -->
								<!-- @csrf -->
							<!-- </form> -->
						<!-- </div> -->
					<!-- </li> -->
				<!-- @endguest -->
			<!-- </ul>			 -->
		<!-- </div> -->
	<!-- </div> -->
<!-- </nav> -->



        <!-- Header -->
<header id="header" class="header">
	@guest
			<h4 class="text-center">Algar Telecom</h4>
	@endguest
	
	@if(!Auth::guest())
	<div class="header-menu">
		<div class="col-sm-7">			
			<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
			<div class="header-left">
				<!-- <button class="search-trigger"><i class="fa fa-search"></i></button> -->
				<!-- <div class="form-inline"> -->
					<!-- <form class="search-form"> -->
						<!-- <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search"> -->
						<!-- <button class="search-close" type="submit"><i class="fa fa-close"></i></button> -->
					<!-- </form> -->
				<!-- </div> -->

				<!-- <div class="dropdown for-notification"> -->
				  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
					<!-- <i class="fa fa-bell"></i> -->
					<!-- <span class="count bg-danger">5</span> -->
				  <!-- </button> -->
				  <!-- <div class="dropdown-menu" aria-labelledby="notification"> -->
					<!-- <p class="red">You have 3 Notification</p> -->
					<!-- <a class="dropdown-item media bg-flat-color-1" href="#"> -->
						<!-- <i class="fa fa-check"></i> -->
						<!-- <p>Server #1 overloaded.</p> -->
					<!-- </a> -->
					<!-- <a class="dropdown-item media bg-flat-color-4" href="#"> -->
						<!-- <i class="fa fa-info"></i> -->
						<!-- <p>Server #2 overloaded.</p> -->
					<!-- </a> -->
					<!-- <a class="dropdown-item media bg-flat-color-5" href="#"> -->
						<!-- <i class="fa fa-warning"></i> -->
						<!-- <p>Server #3 overloaded.</p> -->
					<!-- </a> -->
				  <!-- </div> -->
				<!-- </div> -->

				<!-- <div class="dropdown for-message"> -->
				  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" -->
						<!-- id="message" -->
						<!-- data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
					<!-- <i class="ti-email"></i> -->
					<!-- <span class="count bg-primary">9</span> -->
				  <!-- </button> -->
				  <!-- <div class="dropdown-menu" aria-labelledby="message"> -->
					<!-- <p class="red">You have 4 Mails</p> -->
					<!-- <a class="dropdown-item media bg-flat-color-1" href="#"> -->
						<!-- <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span> -->
						<!-- <span class="message media-body"> -->
							<!-- <span class="name float-left">Jonathan Smith</span> -->
							<!-- <span class="time float-right">Just now</span> -->
								<!-- <p>Hello, this is an example msg</p> -->
						<!-- </span> -->
					<!-- </a> -->
					<!-- <a class="dropdown-item media bg-flat-color-4" href="#"> -->
						<!-- <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span> -->
						<!-- <span class="message media-body"> -->
							<!-- <span class="name float-left">Jack Sanders</span> -->
							<!-- <span class="time float-right">5 minutes ago</span> -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
						<!-- </span> -->
					<!-- </a> -->
					<!-- <a class="dropdown-item media bg-flat-color-5" href="#"> -->
						<!-- <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span> -->
						<!-- <span class="message media-body"> -->
							<!-- <span class="name float-left">Cheryl Wheeler</span> -->
							<!-- <span class="time float-right">10 minutes ago</span> -->
								<!-- <p>Hello, this is an example msg</p> -->
						<!-- </span> -->
					<!-- </a> -->
					<!-- <a class="dropdown-item media bg-flat-color-3" href="#"> -->
						<!-- <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span> -->
						<!-- <span class="message media-body"> -->
							<!-- <span class="name float-left">Rachel Santos</span> -->
							<!-- <span class="time float-right">15 minutes ago</span> -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
						<!-- </span> -->
					<!-- </a> -->
				  <!-- </div> -->
				<!-- </div> -->
			</div>
		</div>

		<div class="col-sm-5">
			<div class="user-area dropdown float-right">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="user-avatar rounded-circle" src="/images/admin.jpg" alt="User Avatar">
				</a>
				<div class="user-menu dropdown-menu">
					<a class="nav-link" href="/login"><i class="fa fa- user"></i>Meu perfil</a>
					
					<a class="nav-link" href="/register"><i class="fa fa -cog"></i>Cadastrar novo usuário</a>
					<a class="nav-link" 
						href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Sair') }}
					</a>
			
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</div>

			<!-- <div class="language-select dropdown" id="language-select"> -->
				<!-- <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true"> -->
					<!-- <i class="flag-icon flag-icon-us"></i> -->
				<!-- </a> -->
				<!-- <div class="dropdown-menu" aria-labelledby="language" > -->
					<!-- <div class="dropdown-item"> -->
						<!-- <span class="flag-icon flag-icon-fr"></span> -->
					<!-- </div> -->
					<!-- <div class="dropdown-item"> -->
						<!-- <i class="flag-icon flag-icon-es"></i> -->
					<!-- </div> -->
					<!-- <div class="dropdown-item"> -->
						<!-- <i class="flag-icon flag-icon-us"></i> -->
					<!-- </div> -->
					<!-- <div class="dropdown-item"> -->
						<!-- <i class="flag-icon flag-icon-it"></i> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

		</div>
	@endif
	</div>
</header>
<!-- /header -->
<!-- Header -->
