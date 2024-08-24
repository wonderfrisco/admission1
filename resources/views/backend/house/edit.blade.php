@extends('layout.backend')

@section('content')
<div class="right_col" role="main">
          <div class="">




            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit {{ $house->name }}</h2>
                    <a href="{{route('house.index')}}" class="btn btn-success btn-sm float-right">
                      <i class="fa fa-arrow-circle-left mr-1"></i>Back
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
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('house.update', $house->id)}}" >
                    @csrf

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="name">House Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control has-feedback-left"  Name="name" value="{{ $house->name }}">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="gender">House Gender <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="gender_id" id="gender">
                            <option>Choose Gender</option>
                           @foreach ($genders as $gender )
                           <option value="{{ $gender->id }}" {{ $house->gender->id == $gender->id? 'selected': '' }} >{{ $gender->name }}</option>
                           @endforeach
                          </select>

                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="size">House Size <span style="color: red">*</span></label>
                        <input type="text" class="form-control has-feedback-left"  name="size" value="{{ $house->size }}">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="color">House Color <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="color_id" id="color">
                            <option>Choose Color</option>
                           @foreach ($colors as $color )
                           <option value="{{ $color->id }}" {{ $house->color->id == $color->id? 'selected': '' }} >{{ $color->name }}</option>
                           @endforeach
                          </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="name">House Number <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="number_id" id="number">
                            <option>Choose Number</option>
                           @foreach ($numbers as $number )
                           <option value="{{ $number->id }}" {{ $house->number->id == $number->id? 'selected': '' }} >{{ $number->num }}</option>
                           @endforeach
                          </select>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Update House</button>
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
