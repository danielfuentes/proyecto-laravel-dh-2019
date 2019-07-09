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
    <section class="container pt-3 pb-3">
        <form class='form-group' method="POST" action="{{route('users.update',['id' => $user->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <div class="product-image">
                            <img class="pic-1" src="{{asset($user->avatar)}}">
                        </div>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                        <label for="imageLoc">Cambiar avatar</label>
                        <input type="file" value="avatar" class='form-control-file' name="avatar" id="avatar">
                    </article>
                </section> 
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$user->name}}"></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Email</dt>
                            <dd>{{$user->email}}</dd>
                        </dl>
                        <dl class="param param-feature">
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
                        <div class='container-fluid p-0'>
                            <a href="{{route('users.show',['id' => $user->id])}}" class="btn btn-info btn-md">Volver</a>
                            <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                        </div>
                    </article> 
                </section> 
                
            </article>
        </form>
        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </section>
</div>   
@endsection  