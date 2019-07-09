@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style> 
        .pagination a {color:black}
        .product-grid{padding:0 0 0px !important;}
        .edit, .edit:hover{color:blue}
        .delete, .delete:hover{color:red}

    </style>
@endsection
@section('content')
<div id='product-container' class="container-fluid p-0">
    <div class="container pt-3 pb-3">
        <form class='form-group' method="POST" action="{{route('update',['id' => $user->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <section class="product-image">
                            <img class="pic-1" src="{{asset($user->avatar)}}">
                        </section>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                        <label for="imageLoc">Cambiar avatar</label>
                        <input type="file" value="avatar" class='form-control-file' name="avatar" id="avatar">
                    </article>
                </section> 
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h2>Nombre</h2>
                        <h3 class="title mb-3"><input type="text" style="width: 70%;" name="name" id="name" value="{{$user->name}}"></h3>
                        <strong>{{ $errors->first('name') }}</strong>
                        <hr>
                        <h2>Apellido</h2>
                        <h3 class="title mb-3"><input type="text" style="width: 70%;" name="lname" id="lname" value="{{$user->lname}}"></h3>
                        <strong>{{ $errors->first('lname') }}</strong>
                        <hr>
                        <h2>Password</h2>
                        <h3 class="title mb-3"><input type="password" style="width: 70%;" name="password" id="password" placeholder="Password"></h3>
                        <strong>{{ $errors->first('password') }}</strong>
                        <hr>
                        <h3 class="title mb-3"><input type="password" style="width: 70%;" name="npassword" id="npassword" placeholder="New Password"></h3>
                        <strong>{{ $errors->first('npassword') }}</strong>
                        <h3 class="title mb-3"><input type="password" style="width: 70%;" name="confirm-password" id="confirm-password" placeholder="Confirm Password"></h3>
                        <strong>{{ $errors->first('confirm-password') }}</strong>
                        <hr>
                        <h2>Email</h2>
                        <h3 class="title mb-3"><input type="text" style="width: 70%;" name="email" id="email" value="{{$user->email}}"></h3>
                        <strong>{{ $errors->first('email') }}</strong>
                        <dl class="item-property param param-feature">
                            <dt>Género</dt>
                            <dd>
                                <select name="genre" id="genre">
                                    <option value="{{$user->genre}}" selected>@if ($user->genre == null) Ninguno @else {{$user->genre}}   @endif</option>
                                    @foreach ($genres as $genre)
                                        @if ($genre != $user->genre)
                                            <option value="{{$genre}}">{{$genre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        </dl>
                        <hr>
                        <dl class="item-property">
                            <dt>Creado el</dt>
                            <dd>{{$user->created_at}}</dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Modificado el</dt>
                            <dd>{{$user->updated_at}}</dd> 
                        </dl>
                        <section class='container-fluid p-0'>
                            <a href="{{route('profile')}}" class="btn btn-info btn-md">Volver</a>
                            <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                        </section>
                    </article> 
                </section> 
                
            </article>
        </form>
    </div>
</div>   

<script src ="{{asset('js/login.js')}}"></script>

@endsection  