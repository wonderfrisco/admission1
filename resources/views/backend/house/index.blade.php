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
            <h2>List of Houses</h2>
            <a href="{{route('house.create')}}" class="btn btn-success btn-sm float-right">
            <i class="fa fa-plus-circle mr-1"></i>New House
            </a>
            <div class="clearfix"></div>

           </div>
            <div class="x_content">
            <table id="mydatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#.</th>
                    <th>House Name</th>
                    <th>House Number</th>
                    <th>House Color</th>
                    <th>House Size</th>
                    <th>Gender</th>
                    <th>Status</th>

                    <th class="text-center">Actions</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($houses as $key => $house)
                        <tr>
                            <td>{{1+$key}}.</td>
                            <td>{{$house->name}}</td>
                            <td>{{$house->number->num}}</td>
                            <td>{{$house->color->name}}</td>
                            <td>{{$house->size}}</td>
                            <td>{{$house->gender?->name}}</td>
                            <td>
                                @if ($house->isFull)
                                    <span class="label-avail label-danger" style="background-color: #df5560; color: white; padding-left:1.8rem; padding-right:1.8rem">Full</span>
                                @else
                                <span class="label-avail label-primary">Available</span>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="{{route('house.edit', $house->id)}}" title="Edit">
                                    <i class="fa fa-edit btn btn-primary" ></i>
                                </a>
                                <a href="{{route('house.destroy', $house->id)}}" onclick="(confirmation(event))" title="Delete">
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
