@extends('layouts.app')

@section('assets')
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{{asset('css/indexadminproducts.css')}}">
<script src="{{asset('js/indexadminproducts.js')}}"></script>
@endsection

@section('content')
<div class="container-fluid p-0">
	<section class="table-wrapper m-0">
		<article class="table-title">
			<section class="row">
				<div class="col-sm-6">
					<h2>Administración de <strong>Usuarios</strong></h2>
				</div>
			</section>
		</article>
		<table id='table' class="table table-striped table-hover  w-100">
			<thead class='w-100'>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Fecha Creacion</th>
					<th>Fecha Modificación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class='w-100'>
				@foreach ($users as $user) 
				<tr> 
					<td><a href="{{route('users.show',['id' => $user->id])}}">{{$user->name}}</a></td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
					<td class=d-flex>
						<a href="{{route('users.edit', ['id' => $user->id])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<form id='{{$user->id}}' class='form-delete' action="{{route('users.destroy',['id' => $user->id])}}" method="post">
							@method('DELETE')
							@csrf
							<a id='delete-link-{{$user->id}}' href="#" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</div>
@endsection