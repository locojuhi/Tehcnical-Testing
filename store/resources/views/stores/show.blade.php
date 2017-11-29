@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
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
                        <h3 class="box-title">{{$store->name}}</h3>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <form method="POST" action="{{action('StoreController@destroy', ['id' => $store->id] )}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                        <a href="{{route('stores.edit', ['id' => $store->id])}}" class="btn btn-primary">Editar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>Fecha de apertura </strong>

                        <p class="text-muted">
                            {{$store->opening_date}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i>Coordenadas</strong>

                        <p class="text-muted">{{$store->lat . ',' . $store->lng}}</p>

                        </div>
                        <!-- /.box-body -->
                    </div>

			</div>
		</div>
	</div>
@endsection


			</div>
		</div>
	</div>
@endsection
