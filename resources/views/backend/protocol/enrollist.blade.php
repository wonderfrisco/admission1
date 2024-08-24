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
            <h2>Protocol Enrolment List</h2>
            <a href="{{route('placement.admission.protocolEnrolmentListExcel')}}" class="btn btn-success btn-sm float-right ml-2">
            <i class="fa fa-file-excel-o mr-1"></i>Excel
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
                    <th>House</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($enrolprotos as $key => $enrolproto)
                        <tr>
                            <td>{{1+$key}}.</td>
                            <td>{{$enrolproto->index}}</td>
                            <td>{{$enrolproto->name}}</td>
                            <td>{{$enrolproto->gender->name}}</td>
                            <td>{{$enrolproto->aggregate}}</td>
                            <td>{{$enrolproto->programme->name}}</td>
                            <td>{{$enrolproto->student->house->name}}({{ $enrolproto->student->house->color->name }})</td>
                            <td><img src="{{ asset('storage/'. $enrolproto->student->photo) }}" width="50" height="60" alt=""></td>
                            <td class="text-center" width="80">
                                <a href="{{route('student.show', $enrolproto->student->id)}}" title="View Detail">
                                    <i class="fa fa-eye btn btn-primary btn-sm" ></i>
                                </a>
                                <a href="{{route('student.edit.enrolment', $enrolproto->student->id)}}" title="Edit Detail">
                                    <i class="fa fa-edit btn btn-success btn-sm" ></i>
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
