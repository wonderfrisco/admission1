@extends('layout.backend')
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
            <h2>{{ $document->name }}</h2>
            <a href="{{route('document.index')}}" class="btn btn-success btn-sm float-right">
            <i class="fa fa-plus-circle mr-1"></i>back
            </a>
            <div class="clearfix"></div>

           </div>
            <div class="x_content">
                <embed src="{{ asset('storage/' . $document->document) }}" width="1000" height="500"></embed>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
