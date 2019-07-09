@extends('layouts.app')

@section('assets')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')

<div id='register-container' class="container-fluid p-0">
    <section class="formu1">
        <form name="formulario" id="form" action="{{route('register')}}" method="post" enctype="multipart/form-data">
            @csrf

            <h2>Registrate</h2>
            <p class="hint-text">Crea tu cuenta. Y empieza a comprar.</p>
            <article class="form-group" >
                <input id='name' type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" >

                @if ($errors->has('name'))
                    <strong>{{ $errors->first('name') }}</strong>

            @endif
            <p id="errorName"></p>

            </article>
            <article class="form-group" >
                <input id='lname' type="text" class="form-control" name="lname" placeholder="Apellido" value="{{ old('lname') }}">
                @if ($errors->has('lname'))
                    <strong>{{ $errors->first('lname') }}</strong>
            @endif
            <p id="errorlName"></p>
            </article>

            <article class="form-group">
                <input id='email' type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" >
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
            @endif
            <p id="errorEmail"></p>
            </article>
            <article class="form-group">
                <input id='password' type="password" class="form-control" name="password" placeholder="Contraseña" ><small id="passwordHelpInline" class="text-muted">
                        Debe ser mayor a 8 digitos alfanumericos y tener al menos una mayuscula y una minuscula
                </small>
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
                <p id="errorPass"></p>
            </article>
            <article class="form-group">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contrasena" name="password_confirmation" >
                    <p id="errorPass2"></p>
            </article>
            <article class="form-group mx-auto">
                <h6 class="text-center">Ingresa tu genero</h6>
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><input  id ="male" type="radio" name="genre" value="male" > Hombre</li>
                    <li class="list-inline-item"><input id ="female" type="radio" name="genre" value="female" > Mujer </li>
                    <li class="list-inline-item"> <input id ="other" type="radio" name="genre" value="other" > Otro</li>
                    <p id= "errorGenres"></p>
                </ul>

            </article>
            <article id='provincia' class="form-group mx-auto">
                <h6 class="text-center">Ingresa tu provincia de residencia</h6>

            </article>
            <article id='municipio' class="form-group mx-auto">

            </article>


            <article class="form-group">
                <h6 style="text-align: center">Ingresa tu nuevo avatar!</h6>
                <input id="avatar" type="file" class="form-control" name="avatar" placeholder="Ingresa tu nuevo avatar!">
                @if ($errors->has('avatar'))
                    <strong>{{ $errors->first('avatar') }}</strong>
                @endif
            <p id= "errorAvatar"></p>
            </article>
            <article class="form-group">
                <label class="checkbox-inline"><input id="confirm" type="checkbox" name="confirm" > Acepto los <a href="#">Terminos de Uso</a> y <a href="#">la Politica de privacidad </a></label>
                <p id= "errorConfirm"></p>

            </article>
            <article class="form-group">
                <button id="button" type="submit" class="btn btn-success btn-lg btn-block">
                    {{ __('Registrate!') }}
                </button>
            </article>

            <article class="text-center">Ya tienes una cuenta? <a class="text-dark" href="{{route('login')}}">Ingresa</a></article>
        </form>
</section>
</div>

<script src ="{{asset('js/master.js')}}"></script>
<script src="{{asset('js/register.js')}}"></script>

@endsection
