@extends('layouts.master')

@inject('uibuilder', 'Carneles\UIBuilder\UIBuilder')

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('custom_js')
<!-- DataTables -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
$(function () {
    $("#dataTable").DataTable();
});
</script>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{$title}}
        <small>{{$subtitle}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}} List</h3>
                </div>
                <div class="box-body">
                    @include('errors.messages')
                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th width="150px"><a class="btn btn-block btn-sm btn-success" href="{{ url('roles/add') }}"><i class="fa fa-plus"></i> Add New</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_list as $data)
                            <tr>
                                <td>{{$data->code}}</td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-warning" href="{{ url('roles/edit/'.$data->id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" href="{{ url('roles/delete/' . $data->id) }}" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10"></div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


@endsection