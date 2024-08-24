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
            <h2>Not Enrolled Protocol</h2>
            <a href="{{ route('placement.protocol') }}" class="btn btn-success btn-sm float-right">
            <i class="fa fa-shopping-cart mr-1"></i>Import Protocol
            </a>
            <a href="{{route('protocol.protocolNotEnrolExcel')}}" class="btn btn-success btn-sm float-left ml-2">
            <i class="fa fa-file-excel-o mr-1"></i>Excel
            </a>
            <a href="{{route('protocol.protocolNotEnrolPDF')}}" class="btn btn-success btn-sm float-left" target="_blank">
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
                    <th>Contact</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($notprotoenrols as $key => $notprotoenrol)
                        <tr>
                            <td>{{1+$key}}.</td>
                            <td>{{$notprotoenrol->index}}</td>
                            <td>{{$notprotoenrol->name}}</td>
                            <td>{{$notprotoenrol->gender->name}}</td>
                            <td>{{$notprotoenrol->aggregate}}</td>
                            <td>{{$notprotoenrol->programme->name}}</td>
                            <td>{{$notprotoenrol->track}}</td>
                            <td>{{$notprotoenrol->status->name}}</td>
                            <td>{{ $notprotoenrol->contact }}</td>
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
