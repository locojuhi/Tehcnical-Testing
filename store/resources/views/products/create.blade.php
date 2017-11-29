@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
                @include('partials.alert')
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crea un nuevo producto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action ="{{action('ProductController@store')}}">
                        {{ method_field('POST') }}

                        {{ csrf_field() }}

                        @include('products.partials._form')
                    </form>
                </div>
			</div>  
		</div>
	</div>
@endsection
