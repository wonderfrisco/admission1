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
            <h2>List of Placements</h2>
            <a href="{{route('placement.bulk')}}" class="btn btn-success btn-sm float-right">
            <i class="fa fa-shopping-cart mr-1"></i>Import Placement
            </a>
            <a href="{{route('placement.bulk.export')}}" class="btn btn-success btn-sm float-left ml-2">
            <i class="fa fa-file-excel-o mr-1"></i>Excel
            </a>
            <a href="{{route('placement.viewpdf')}}" class="btn btn-success btn-sm float-left" target="_blank">
            <i class="fa fa-file-pdf-o mr-1"></i>PDF
            </a>
            <div class="clearfix"></div>

           </div>
            <div class="x_content">
            <table id="mydatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#.</th>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Aggregate</th>
                    <th>Programme</th>
                    <th>Track</th>
                    <th>Status</th>
                    <th>State</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($placements as $key => $placement)
                        <tr>
                            <td>{{1+$key}}.</td>
                            <td>{{$placement->index}}</td>
                            <td>{{$placement->name}}</td>
                            <td>{{$placement->gender->name}}</td>
                            <td>{{$placement->aggregate}}</td>
                            <td>{{$placement->programme->name}}</td>
                            <td>{{$placement->track}}</td>
                            <td>{{$placement->status->name}}</td>
                            <td width="90">
                                @if ($placement->enroll==true)
                                <span class="label label-success" style="padding:5px">Enrolled</span>
                                @else
                                <span class="label label-primary" style="padding:5px">Not Enrolled</span>
                            @endif
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
