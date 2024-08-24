@extends('layout.backend')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $user->name }}</h2>
                    <a href="{{route('user.index')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-arrow-circle-left mr-1"></i>
                      Back
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    @if ($errors->any())
                     @foreach ($errors->all() as $error)
                      <div class="text-danger">
                          {{ $error }}
                      </div>
                     @endforeach
                 @endif
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('user.profile.update')}}" >
                    @csrf

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  value={{ $user->name }} Name="name">
                        <span class="fa fa-user  form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  value={{ $user->email }} name="email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  value={{ $user->phone }} name="phone">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle mr-1"></i>Update Profile</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>



              </div>

            </div>



          </div>
        </div>

@endsection
