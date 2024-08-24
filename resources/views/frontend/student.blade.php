@extends('layout.student')
@section('styles')
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.css" integrity="sha512-Yi/JvnV4Mj8ZbrH8rGRMwYvgRXviV/jlZLlqsypT5lfzjwdPhJr/yNoIs2RGZDvRWbcazM5cjxVa6Ycq3ukEEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/student.css') }}">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.js" integrity="sha512-UlakzTkpbSDfqJ7iKnPpXZ3HwcCnFtxYo1g95pxZxQXrcCLB0OP9+uUaFEj5vpX7WwexnUqYXIzplbxq9KSatw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>

<script>
       FilePond.registerPlugin(FilePondPluginImagePreview);
       FilePond.registerPlugin(FilePondPluginImageTransform);
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="upload"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({


    imageResizeTargetWidth: 600,
    imageCropAspectRatio: 1,
    imageTransformVariants: {
        thumb_medium_: (transforms) => {
            transforms.resize = {
                size: {
                    width: 350,
                    height: 450,
                },
            };
            return transforms;
        },
        thumb_small_: (transforms) => {
            transforms.resize = {
                size: {
                    width: 350,
                    height: 450,
                },
            };
            return transforms;
        },
    },
        labelIdle: "Click here to upload photo",
        server: {
            process: '/student/photo/upload',
            revert: '/student/photo/destroy',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }

    });

</script>

@endsection
@section('jquery')

<script>
    $(document).ready(function(){
        $('#region').on('change',function(){
            const country_id = this.value;
            $('#district').html('')
            $.ajax({
                url: '{{ url("student/district") }}',
                type: 'POST',
                data:{
                    country_id: country_id,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result){
                    $('#district').html('<option value="">Select District</option>');
                    $.each(result, function(key, value){
                        $('#district').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });

                }
            });

        });
        $('#fliving').on('change',function(){
            const fliving = $('#fliving').val();
            if(fliving == 0){
                $('.father').addClass('hide');
                const mliving = $('#mliving').val();
                if(!mliving == 2){
                    $('.guardian').addClass('hide');
                }

            }else if(fliving == 1){
                $('.father').removeClass('hide');
                const mliving = $('#mliving').val();
                if(mliving == 2){
                    $('.guardian').removeClass('hide');
                }
                else if(mliving == 1){
                    $('.guardian').addClass('hide');
                }

            }
            else{

                $('.guardian').removeClass('hide');
                $('.father').addClass('hide');
            }
        });
        $('#mliving').on('change',function(){
            const mliving = $('#mliving').val();
            if(mliving == 0){
                $('.mother').addClass('hide');
                const fliving = $('#fliving').val();
                if(fliving == 2){
                    $('.guardian').addClass('hide');
                }

            }else if(mliving == 1){
                const fliving = $('#fliving').val();
                $('.mother').removeClass('hide');
                if(fliving == 2){
                    $('.guardian').removeClass('hide');
                }
                else if(fliving == 1){
                    $('.guardian').addClass('hide');
                }
            }
            else{

                $('.guardian').removeClass('hide');
                $('.mother').addClass('hide');
            }
        });


    });


</script>

@endsection
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="color: #0e2694">Personal Record Form</h2>

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


                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('student.store')}}" enctype="multipart/form-data">
                    @csrf
                    <fieldset id="field-value">
                        <legend>Student Information</legend>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback photo">
                            <label >Passport Picture </label>
                            <div class="photo-input">

                                <input type="file" id="upload"  name="photo" required />
                            </div>
                          </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Index Number <span style="color: red">*</span></label>
                        <input type="text" id="index" class="form-control" name="index" value="{{ $admission->index }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 form-group has-feedback">
                        <label for="name">Name <span style="color: red">*</span></label>
                        <input type="text" id="name" class="form-control" name="name" value="{{ $admission->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Gender <span style="color: red">*</span></label>
                        <input type="text" id="gender" class="form-control" name="gender" value="{{ $admission->gender->name}}" required readonly/>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="status">Status <span style="color: red">*</span></label>
                        <input type="text" id="status" class="form-control" name="status" value="{{ $admission->status->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Programme <span style="color: red">*</span></label>
                        <input type="text" id="programme" class="form-control" name="programme" value="{{ $admission->programme->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Track <span style="color: red">*</span></label>
                        <input type="text" id="track" class="form-control" name="track" value="{{ $admission->track }}" required  readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="aggregate">Aggregate <span style="color: red">*</span></label>
                        <input type="text" id="aggregate" class="form-control" name="aggregate" value="{{ $admission->aggregate }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback date id">
                        <label for="dob">Date of Birth <span style="color: red">*</span></label>
                        <input type="date" id="dob" class="form-control" name="dob"  required />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="code">Enrollment Code <span style="color: red">*</span></label>
                        <input type="text" id="code" class="form-control" name="code"  required />
                        <span style="color: #bb4949">(<i>Can be found on the Enrolment form</i>)</span>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="raw">Raw Score <span style="color: red">*</span></label>
                        <input type="number" id="raw" class="form-control" name="raw"  required />
                        <span style="color: #bb4949">(<i>Can be found on the Enrolment form</i>)</span>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback ">
                        <label for="pob">Place of Birth <span style="color: red">*</span></label>
                        <input type="text" id="pob" class="form-control" name="pob"  required />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="house">House Allocated <span style="color: red">*</span></label>
                        <input type="text" id="house" class="form-control" name="house_idd"  value="{{ $allocatedHouse->name }} ({{ $allocatedHouse->number->num }})({{ $allocatedHouse->color->name }})" readonly />
                        <input type="hidden" id="house_id" class="form-control" name="house_id" style="display: none" value=" {{ $allocatedHouse->id }}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feeadmission">
                        <label for="bsch">Basic School(JHS) <span style="color: red">*</span></label>
                        <input type="text" id="bschool" class="form-control" name="bschool"  required />
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="nation">Nationality <span style="color: red">*</span></label>
                        <input type="text" id="nationality" class="form-control" name="nationality"  required />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="region">Region <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="region" id="region">
                            <option value="" class="r">Choose Region</option>
                            @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="home">District <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="district" id="district">
                            <option value="" >Choose District</option>

                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="home">Home Town <span style="color: red">*</span></label>
                        <input type="text" id="home" class="form-control" name="home"  required />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="houseNumber">Residential Address <span style="color: red">*</span></label>
                        <input type="text" id="houseNumber" class="form-control" name="raddress"  required />
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="religion">Religious Affiliation <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="religion_id" id="religion">
                            <option value="" class="r">Choose Religion</option>
                            @foreach($religions as $religion)
                            <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="disability">Disability</label>
                        <select class="form-control has-feedback-left" name="disability_id" id="disability">
                            @foreach($disabilities as $disability)
                            <option value="{{ $disability->id }}">{{ $disability->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="medication">Medications </label>
                        <input type="text" id="medication" class="form-control" name="medication"/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="allergy">Allergies</label>
                        <input type="text" id="allergy" class="form-control" name="allergy"  />
                      </div>
                    </fieldset>
                    <fieldset>
                        <legend>Parent/Guardian's Information</legend>
                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="fliving">Father's Living Status: <span style="color: red">*</span></label>

                            <select class="form-control has-feedback-left" name="fliving_id" id="fliving" required>
                                <option value="">Select..</option>
                                @foreach($livings as $living)
                                <option value="{{ $living->id }}">{{ $living->name }}</option>
                                @endforeach
                              </select>
                          </div> --}}

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="fname">Parent/Guardian's Name: <span style="color: red">*</span></label>
                            <input type="text" id="fname" class="form-control" name="pname"  required />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback  foccu">
                            <label for="foccupation">Parent/Guardian's Occupation: <span style="color: red">*</span></label>
                            <select class="form-control has-feedback-left" name="poccupation_id" id="poccupaition">
                                <option value="">Select..</option>
                                @foreach($occupations as $occupation)
                                <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="ftown">Parent/Guardian's Home Town: <span style="color: red">*</span></label>
                            <input type="text" id="ftown" class="form-control" name="ptown" />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="fnumber">Parent/Guardian's Phone: <span style="color: red">*</span></label>
                            <input type="text" id="fnumber" class="form-control" name="pnumber"  />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="faddress">Parent/Guardian's Residential Address: <span style="color: red">*</span></label>
                            <input type="text" id="faddress" class="form-control" name="paddress" />
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="relation">Relationship:</label>
                            <select class="form-control has-feedback-left" name="prelation_id" id="relation">
                                <option value="">Select..</option>
                                @foreach($relations as $relation)
                                <option value="{{ $relation->id }}">{{ $relation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        </fieldset>
                        <fieldset>
                            <legend>Emergency Contact</legend>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback ">
                            <label for="mname">Name: <span style="color: red">*</span></label>
                            <input type="text" id="mname" class="form-control" name="ename"  required />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="eoccupation">Occupation: <span style="color: red">*</span></label>
                            <select class="form-control has-feedback-left" name="eoccupation_id" id="eoccupaition">
                                <option value="">Select..</option>
                                @foreach($occupations as $occupation)
                                <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="etown">Home Town: <span style="color: red">*</span></label>
                            <input type="text" id="etown" class="form-control" name="etown"  />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="enumber">Phone Number: <span style="color: red">*</span></label>
                            <input type="text" id="enumber" class="form-control" name="enumber" />
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="eaddress">Residential Address: <span style="color: red">*</span></label>
                            <input type="text" id="eaddress" class="form-control" name="eaddress" />
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="erelation">Relationship:</label>
                            <select class="form-control has-feedback-left" name="erelation_id" id="erelation">
                                <option value="">Select..</option>
                                @foreach($relations as $relation)
                                <option value="{{ $relation->id }}">{{ $relation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        </fieldset>

                      <div class="form-group but">
                        <div class="btn-group">
                        <button class="btn btn-btn" type="submit"><i class="fa fa-save mr-1 butt"></i>Save Record</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="power">
                    <p><span class="pow">Powered by :</span> <span class="won">Wonda</span><span class="tek">Tek</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
