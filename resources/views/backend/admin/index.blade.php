@extends('layout.table')
@section('content')

<div class="right_col" role="main">
    <div class="">
    <div class="page-title">


        <div class="title_right">
        <!-- <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
            </span>
            </div>
        </div> -->
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>List of Users</h2>
            <a href="{{route('user.create')}}" class="btn btn-success btn-sm float-right">
            <i class="fa fa-plus-circle mr-1"></i>New User
            </a>
            <div class="clearfix"></div>

           </div>
            <div class="x_content">
            <table id="mydatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>

                    <th class="text-center">Actions</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{1+$key}}.</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->role}}</td>

                            <td class="text-center">
                                <a href="{{route('user.edit', $user->id)}}" title="Edit">
                                    <i class="fa fa-edit btn btn-primary" ></i>
                                </a>
                                <a href="{{route('user.destroy', $user->id)}}" onclick="(confirmation(event))" title="Delete">
                                    <i class="fa fa-trash  btn btn-danger"></i>

                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
