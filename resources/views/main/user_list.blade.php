@extends('layouts.master')

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
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_list as $data)
                            <tr>
                                <td>{{$data->email}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->created_at}}</td>
                                <td><div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                                  </div></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-md-2">
                        <button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                    <div class="col-md-10"></div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


@endsection