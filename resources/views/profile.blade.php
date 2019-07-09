@extends('layouts.app')
	@section('assets')

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Perfil</title>
	{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
		<link rel="stylesheet" href="css/profile.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/header.css"> 
	@endsection

	@section('content')


		<hr class="">
		<main class="container target">
			
			<section class="row">
				<article class="col-sm-10">
				<h1 class="">{{Auth::User()->name . " " . Auth::User()->lname}}</h1>
				<a  href="{{route('edit', Auth::User()->id)}}" class="btn btn-warning">Edit Profile</a> 
				</article>
				<section class="col-sm-2"><a href="" class="pull-sright"><img id="avatar" title="profile image" class="img-circle img-responsive" src="{{asset(Auth::User()->avatar)}}"></a></section>
			</section>
		<hr>
			<section class="row">
				<article class="col-sm-3">
					<!--left col-->
					<ul class="list-group">
						<li class="list-group-item text-muted" contenteditable="false">Profile</li>
						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Name: </strong></span>{{Auth::User()->name . " " . Auth::User()->lname }}</li>
						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Email: </strong></span>{{Auth::User()->email}}</li>
						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Sex: </strong></span>{{Auth::User()->genre}}</li>
						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Lugar de Residencia: </strong></span>{{Auth::User()->municipio}}</li>
					</ul>
				
					
				</article>

				<div class="col-sm-9" style="" contenteditable="false">
					<div class="panel panel-default">
						

					
					<section class="panel panel-default target">
						<article class="panel-heading" contenteditable="false"><b>Tu Carrito</b></article>
						<article class="panel-body">
						<article class="row">
							@if (session()->get("user.cart"))
							@foreach (session()->get("user.cart") as $product)
							<div class="col-md-4">
								<section class="thumbnail">
									<img style="width:200px;height:300px;" src="{{$product['image']}}">
									<article class="caption">
										<h3>
											{{$product['name']}}
										</h3>
										<p>
											{{$product['description']}}
										</p>
									</article>
								</section>
							</div>
							@endforeach
							@else
							<h2>Su carrito se encuentra vacio</h2>
							@endif
						</article>
						</article>
					<hr>
					
					</section>
				<section class="panel panel-default">
						<article class="panel-heading"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit</b></article>
						<article class="panel-body"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nobis est necessitatibus ex, tenetur eius. Dolorum eos fuga qui dolorem. Quam, recusandae eum totam magnam beatae provident sit dolores eveniet.</article>
						<br>
						<button type="button" class="btn btn-primary">Lorem Ipsum
						
				</section>
				<br>				
		</section>
	</main>

	@endsection