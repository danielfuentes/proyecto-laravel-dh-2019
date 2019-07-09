@extends('layouts.app')
@section('assets')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('css/reset.css')}}">


@endsection


@section('content')


  <body>
	
	<div class="container">
		<section class="card">
			<div class="container-fliud">
				<article class="wrapper row">
					<section class="preview col-md-6">
						<article class="preview-pic tab-content">
              <section class="tab-pane active justify-content-center" style="margin-left:35px"id="pic-1"><img class="asd" src="{{asset($product->imageLoc)}}" /></section>
						  <section class="tab-pane" style="margin-left:35px" id="pic-2"><img class="asd" src="{{asset($product->imageLoc2)}}" /></section>
						</article>
						<ul class="preview-thumbnail nav nav-tabs">
							
						  <li><a class="active" data-target="#pic-1" data-toggle="tab"><img  src="{{asset($product->imageLoc)}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset($product->imageLoc2)}}" /></a></li>

						</ul>
						
					</section>
					<section class="details col-md-6">
                    <h3 class="product-title">{{$product->name}}</h3>
										<h4 class=product-title>{{$product->genre['name']}}</h4>
										<h5 class=product-title>{{$product->category['name']}}</h5>
						<article class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</article>
                    <p class="product-description">{{$product->description}}</p>
                    <h4 class="price">PRECIO: <span>${{$product->price}}</span></h4>
						<p class="vote"><strong>Denunciar este producto</strong></p>
						<h5 class="sizes">size: 
						<span class="size" data-toggle="tooltip" title="small">{{$product->size['size']}}</span>
						</h5>
						
						<article class="action">
							<a href={{route('cart.add', $product->id)}} class="add-to-cart btn btn-default" type="button">AÑADIR AL CARRITO</a>
						</article>
					</section>
				</article>
			</div>
		</section>
		<br>
	</div>
  </body>
</html>
@endsection