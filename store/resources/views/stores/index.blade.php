@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="pull-right" id="example1_length">
                                        <a href="{{action('StoreController@create')}}" class = "btn btn-success">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <tr role="row">
                                            <th class="sorting_asc"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 180px;">
                                                Nombre
                                            </th>
                                            <th class="sorting"  aria-label="Browser: activate to sort column ascending" style="width: 230px;">
                                                Fecha Apertura
                                            </th>
                                            <th class="sorting"  aria-label="Platform(s): activate to sort column ascending" style="width: 196px;">
                                                Acciones
                                            </th>
                                            
                                        </tr>
                                        @foreach ($stores as $store)
                                            <tr>
                                                <td>
                                                    {{$store->name}}
                                                </td>
                                                <td>
                                                    {{$store->opening_date}}
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        {{ $stores->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
			</div>
		</div>
	</div>
@endsection
