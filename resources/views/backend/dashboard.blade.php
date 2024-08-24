@extends('layout.backend')

@section('content')

<div class="right_col" role="main">
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a href="{{ route('placement.index') }}">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-th-large "></i></div>
                <div class="count">{{ $placements->count() }}</div>
                <h3>Total Placed</h3>
              </div>
          </a>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a href="{{ route('student.enrol') }}">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">{{ $enrolls->count() }}</div>
            <h3>Total Enrolled</h3>
          </div>
        </a>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a href="{{ route('placement.notenrol') }}">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-minus-square-o"></i></div>
                <div class="count">{{ $notenrolls->count() }}</div>
                <h3>Not Enrolled</h3>
              </div>
         </a>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <a href="{{ route('placement.protocol.index') }}">
            <div class="icon"><i class="fa fa-times-circle-o"></i></div>
            <div class="count">{{ $protocols->count() }}</div>
            <h3>Total Protocol</h3>
            </a>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <a href="{{ route('placement.protocol.protoenrol') }}">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">{{ $protocolsenroll->count() }}</div>
            <h3>Protocol Enrolled</h3>
            </a>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <a href="{{ route('placement.protocol.notprotoenrol') }}">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">{{ $protocolsnotenroll->count() }}</div>
                <h3 style="font-size: 1.6rem">Protocol Not Enrolled</h3>
            </a>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a href="{{ route('user.index') }}">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="count">{{ $users->count() }}</div>
            <h3>Total Users</h3>
          </div>
        </a>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a href="{{ route('house.index') }}">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-home"></i></div>
                <div class="count">{{ $houses->count() }}</div>
                <h3>Total houses</h3>
              </div>
        </a>
        </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>House Distribution</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="wondaChart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Enrolment Data</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="wondaChart1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Gender Distribution</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="wondaChart2"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Status Distribution</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="wondaChart3"></canvas>
              </div>
            </div>
          </div>

        <div class="col-md-4 col-sm-4 col-xs-12">

          </div>
      </div>
  </div>
@endsection
