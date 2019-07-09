@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .pagination a {color:black}
        .product-grid{padding:0 0 0px !important;}
        .edit, .edit:hover{color:blue}
        .delete, .delete:hover{color:red}
    </style>
 
 <script type="text/javascript">
    $(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();



    document.getElementById("delete-link").onclick = function() {
        swal({
            title: "Estás seguro?",
            text: "Una vez eliminado, no podrás recuperar este registro",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {    	
                document.getElementById("form-delete").submit();
                swal("El registro ha sido eliminado.", {
                icon: "success",
                });
            } else {
                swal("El registro no se ha eliminado.");
            }
        });
    }
    });
</script>
@endsection

@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3">
        <article class="row">
            <section class="col-md-3 col-sm-6">
                <article class="product-grid mb-4 mt-4">
                    <div class="product-image">
                        <img class="pic-1" src="{{asset($user->avatar)}}">
                    </div>
                </article>
                <article class='container-fluid p-0 text-center'>
                    <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-primary btn-sm btn-block"><i class="text-white material-icons">&#xE254;</i></a>
                    <form id='form-delete' class='form-delete' action="{{route('users.destroy',['id' => $user->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <a href='#' id='delete-link' class="btn btn-danger btn-sm btn-block" data-toggle="tooltip" title="Delete"><i class="text-white material-icons">&#xE872;</i></a>
					</form>
                    <a href="{{route('users.index')}}" class="edit btn btn-info btn-sm btn-block"><i class="text-white material-icons">arrow_back</i></a>
                </article>
            </section> 
            <section class="col-md-9 col-sm-6">
                <article class="card-body p-2 pl-4">
                    <h3 class="title mb-3">{{$user->name}}</h3>
                    <hr>
                    <dl class="item-property">
                        <dt>Email</dt>
                        <dd><p>{{$user->email}}</p></dd>
                    </dl>
                    <dl class="item-property">
                            <dt>Genero</dt>
                            <dd><p>@if ($user->genre == null) Ninguno @else {{$user->genre}}   @endif</p></dd>
                    </dl>
                    <dl class="item-property">
                        <dt>Provincia</dt>
                        <dd><p>{{$user->provincia}}</p></dd>
                    </dl>
                    <dl class="item-property">
                        <dt>Municipio</dt>
                        <dd><p>{{$user->municipio}}</p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Fecha de creacion</dt>
                        <dd>{{$user->created_at}}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Fecha de modificacion</dt>
                        <dd>{{$user->updated_at}}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <hr>
                </article> 
            </section> 
        </article>
    </section>
</div>   
@endsection  