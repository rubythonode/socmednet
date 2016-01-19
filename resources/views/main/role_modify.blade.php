@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{$title}}
        <small>{{$subtitle}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$title}} Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ !empty($data) ? url('roles/edit/'.$data->id) : url('roles/add') }}">
                    <div class="box-body">
                        {!! csrf_field() !!}
                        @include('errors.messages')
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" name="code" class="form-control" id="code" placeholder="Enter code" value="{{(!empty($data)) ? $data->code : old('code')}}" {{(!empty($data)) ? 'disabled' : ''}}>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{(!empty($data)) ? $data->name : old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{(!empty($data)) ? $data->description : old('description')}}</textarea>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                        <a class="btn btn-default" href="{{ url('roles') }}"><i class="fa fa-rotate-left"></i> Back to List</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!--/.col (left) -->
        <div class="col-md-3">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Add User</label>
                            <input type="text" class="form-control" placeholder="Enter role name">
                        </div>

                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th>User Name</th>
                                    <th style="width: 10px"></th>
                                </tr>
                                <tr>
                                    <td>Administrator</td>
                                    <td><i class="fa fa-trash-o"></i></td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection