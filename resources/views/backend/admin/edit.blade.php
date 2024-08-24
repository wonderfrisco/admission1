@extends('layout.backend')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit {{ $user->name }}</h2>
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
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('user.update', $user->id)}}" >
                    @csrf

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="name">Name <span style="color: red">*</span></label>
                        <input type="text" id="name" class="form-control" name="name" required value="{{ $user->name }}"/>
                      </div>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="description">Email <span style="color: red">*</span> </label>
                        <input type="text" id="email" class="form-control" name="email" required value="{{ $user->email }}"/>
                      </div>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="description">Phone <span style="color: red">*</span> </label>
                        <input type="text" id="phone" class="form-control" name="phone" required value="{{ $user->phone }}"/>
                      </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Update User</button>
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
