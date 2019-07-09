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
        <form class='form-group' method="POST" action="{{route('products.update',['id' => $product->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <section class="product-image">
                            <img class="pic-1" src="{{asset($product->imageLoc)}}">
                            <img class="pic-2" src="{{asset($product->imageLoc2)}}">  
                        </section>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                        <label for="imageLoc">Imagen 1</label>
                        <input type="file" value="imageLoc" class='form-control-file' name="imageLoc" id="imageLoc">
                        <hr>
                        <label for="imageLoc2">Imagen 2</label>
                        <input type="file" value="imageLoc2" class='form-control-file' name="imageLoc2" id="imageLoc2">
                    </article>
                </section> 
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$product->name}}"></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Descripción</dt>
                            <dd><input type="text" class='form-control' name="description" id="description" value="{{$product->description}}"></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Género</dt>
                            <dd>
                                <select name="genre_id" id="genre_id">
                                    <option value="{{$product->genre['id']}}" selected>{{$product->genre['name']}}</option>
                                    @foreach ($genres as $genre)
                                        @if ($genre->name != $product->genre['name'])
                                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        <dl class="param param-feature">
                            <dt>Categoría</dt>
                            <dd>
                                <select name="category_id" id="category_id">
                                    <option value="{{$product->category['id']}}" selected>{{$product->category['name']}}</option>
                                    @foreach ($categories as $category)
                                        @if ($category->name != $product->category['name'])
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Talle</dt>
                            <dd>
                                <select name="size_id" id="size_id">
                                    <option value="{{$product->size['id']}}" selected>{{$product->size['size']}}</option>
                                    @foreach ($sizes as $size)
                                        @if ($size->size != $product->size['size'])
                                            <option value="{{$size->id}}">{{$size->size}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        </dl>  <!-- item-property-hor -->
                        <dl class="param param-feature">
                            <dt>Precio $</dt>
                            <dd><input type="number" class='form-control' name="price" id="price" value="{{$product->price}}"></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Cantidad</dt>
                            <dd><input type="number" class='form-control' name="stock" id="price" value="{{$product->stock}}"></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <hr>
                        <div class='container-fluid p-0'>
                            <a href="{{route('products.show',['id' => $product->id])}}" class="btn btn-info btn-md">Volver</a>
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