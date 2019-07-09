@extends('layouts.app')

@section('assets')
	<link rel="stylesheet" href="{{asset('css/login.css')}}">

@endsection
	
@section('content')
<div id='login-container' class="container-fluid p-0 d-flex flex-column">
	<article class="title text-center p-3">
		<h1>Accede a tu cuenta</h1>	
	</article>
	<form id="form02" name="formulario" class='container  p-3  mb-3' action="{{route("login")}}" method="post">
	@csrf
		<section class="form-group>
			<label for="userEmail">Email</label>
			<input type="text" name='email' id="userEmail" class="form-control mx-sm-3 col-12 col-lg-6" value="{{ old('email') }}" autofocus>
			<strong>{{ $errors->first('email') }}</strong>
			<p id="errorEmail"></p>

		</section>
		<section class="form-group">
			<label for="inputPassword6">Contraseña</label>
			<input type="password" name='password' id="inputPassword6" class="form-control mx-sm-3 col-12 col-lg-6" value="{{ old('password') }}" autofocus>
			<strong>{{ $errors->first('password') }}</strong>
			<p id="errorPassword"></p>
		</section>
		<section class="form-check mb-3">
			<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

			<label class="form-check-label" for="remember">
				{{ __('Recuerdame') }}
			</label>
		</section>

		<section class='p-0 ml-2 col-12 col-lg-6'>
			<button class="btn btn-md btn-primary btn-block" type="submit">Entrar</button>
			<a class="btn btn-link text-dark text-center btn-block" href="{{ route('password.request') }}">
				{{ __('Olvidaste tu contraseña?') }}
			</a>
		</section>
	</form>
</div>

<script src ="{{asset('js/login.js')}}"></script>
@endsection