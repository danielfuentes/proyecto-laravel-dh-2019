@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <style>
        .pagination a {color:black}
        #product-container {background-image: url('../images/not-found/not-found1.jpg');}
        .no-results {text-shadow: 2px 2px #000}
    </style>
@endsection

@section('content')
<div id='product-container' class="container-fluid p-0">
    <article class="container pt-3 pb-3">
        <section class="row">
            @forelse ($products as $product)
            <article class="col-md-3 col-sm-6">
                <section class="product-grid mb-4">
                    <article class="product-image">
                        <img class="pic-1" src="{{$product->imageLoc}}">
                        <img class="pic-2" src="{{$product->imageLoc2}}">
                        <ul class="social">
                            <li><a href="{{route('front.product.show',$product->id)}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="{{route('cart.add',$product->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>   
                    </article>
                    <article class="product-content">
                        <h3 class="title"><a href="{{route('front.product.show',$product->id)}}">{{$product->name}}</a></h3>
                        <h4 class="genre">{{$product->genre['name']}}</h4>
                        <p class="price">$ {{$product->price}}</p>
                    </article>
                </section>
            </article>      
            @empty
            <div style='height:400px' class='no-results-container d-flex container-fluid mb-5 text-white text-center'>
                <h2 class='no-results align-self-center'>No se encontraron resultados.</h2>
            </div>
                
            @endforelse
        </article>
    <div class='container-fluid d-flex justify-content-center'>
        {{$products->links()}}
    </div>
</div>
</div>
@endsection