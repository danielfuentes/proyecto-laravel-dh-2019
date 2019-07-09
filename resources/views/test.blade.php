@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .pagination a {color:black}
    </style>
@endsection

@section('content')
<div class="container-fluid pl-5 pr-5">
    <h3 class="h3">GG</h3>
    <article class="row">
        @foreach ($products as $product)   
        <section class="col-md-3 col-sm-6">
            <article class="product-grid mb-4">
                <section class="product-image">
                    <img class="pic-1" src="{{$product->imageLoc}}">
                    <img class="pic-2" src="{{$product->imageLoc2}}">
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>   
                </section>
                <section class="product-content">
                    <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                    <p class="price">$ {{$product->price}}</p>
                </section>
            </article>
        </section>
        @endforeach           
    </article>
    <div class='container-fluid d-flex justify-content-center'>
        {{$products->links()}}
    </div>
</div>
@endsection