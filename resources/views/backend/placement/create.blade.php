@extends('layout.backend')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Single Protocol</h2>
                    <a href="{{route('placement.index')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-arrow-circle-left mr-1"></i>
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
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('placement.store')}}" >
                    @csrf

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  placeholder="Index Number" Name="index">
                        <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  placeholder="Full Name" name="name">
                        <span class="fa fa-id-card form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left" name="gender_id" id="gender">
                            <option>Choose Gender</option>
                            @foreach ($genders as $gender )
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                          </select>
                        <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  placeholder="Aggregate" name="aggregate">
                        <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left" name="programme_id" id="programme">
                            <option>Choose Programme</option>
                            @foreach ($programmes as $programme )
                            <option value="{{ $programme->id }}">{{ $programme->name }}</option>
                            @endforeach
                          </select>
                        <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left" name="track">
                            <option value="Choose Track">Choose Track</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                          </select>
                        <span class="fa fa-road form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left" name="status_id" id="status">
                            <option>Choose Status</option>
                            @foreach ($statuss as $status )
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                          </select>
                        <span class="fa fa-bed form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  placeholder="Parent Contact" name="contact">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle mr-1"></i>Save Protocol</button>
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
