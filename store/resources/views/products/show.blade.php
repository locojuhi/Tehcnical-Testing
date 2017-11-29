@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
                <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{$product->name}}</h3>
              <div class="pull-right">
                <div class="btn-group">
                  <form method="POST" action="{{action('ProductController@destroy', ['id' => $product->id] )}}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                    <a href="{{route('editProductStore', ['product_id' => $product->id, 'store_id' => $store_id])}}" class="btn btn-primary">Editar</a>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>Descripcion </strong>

              <p class="text-muted">
                {{$product->description}}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> SKU</strong>

              <p class="text-muted">{{$product->sku}}</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Precio</strong>

              <p>
                {{$product->amount}}
              </p>
            </div>
            <!-- /.box-body -->
          </div>

			</div>
		</div>
	</div>
@endsection
