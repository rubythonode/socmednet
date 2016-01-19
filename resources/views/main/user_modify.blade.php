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
                <form role="form" method="POST" action="{{ !empty($data) ? url('users/edit/'.$data->id) : url('users/add') }}">
                    <div class="box-body">
                        {!! csrf_field() !!}
                        @include('errors.messages')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{(!empty($data)) ? $data->name : old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{(!empty($data)) ? $data->email : old('email')}}" {{(!empty($data)) ? 'disabled' : ''}}>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active" value="1" {{ (!empty($data)) ? (($data->active == 1) ? 'checked' : '') : ((old('active') == 1) ? 'checked' : '') }}> Active
                            </label>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                        <a class="btn btn-default" href="{{ url('users') }}"><i class="fa fa-rotate-left"></i> Back to List</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!--/.col (left) -->
        <div class="col-md-3">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">User's Role</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Add Role</label>
                            <input type="text" class="form-control" placeholder="Enter role name">
                        </div>

                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th>Role Name</th>
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