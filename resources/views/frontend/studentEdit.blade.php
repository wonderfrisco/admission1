@extends('layout.frontend')
@section('styles')
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.css" integrity="sha512-Yi/JvnV4Mj8ZbrH8rGRMwYvgRXviV/jlZLlqsypT5lfzjwdPhJr/yNoIs2RGZDvRWbcazM5cjxVa6Ycq3ukEEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/student.css') }}">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.js" integrity="sha512-UlakzTkpbSDfqJ7iKnPpXZ3HwcCnFtxYo1g95pxZxQXrcCLB0OP9+uUaFEj5vpX7WwexnUqYXIzplbxq9KSatw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script>
       FilePond.registerPlugin(FilePondPluginImagePreview);
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="upload"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        imagePreviewHeight: 100,
        imageResize: {
        targetWidth: 800,
        targetHeight: 600,
        upsacle: false
                    },

        labelIdle: "upload photo",
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


                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('student.update', $student->id)}}" enctype="multipart/form-data">
                    @csrf
                    <fieldset id="field-value">
                        <legend>Student Information</legend>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback photo">
                            <label >Passport Picture </label>
                            <div class="photo-input">

                                <input type="file" id="upload"  name="photo"/>
                            </div>
                          </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Index Number <span style="color: red">*</span></label>
                        <input type="text" id="index" class="form-control" name="index" value="{{ $student->index }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 form-group has-feedback">
                        <label for="name">Name <span style="color: red">*</span></label>
                        <input type="text" id="name" class="form-control" name="name" value="{{ $student->placement->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Gender <span style="color: red">*</span></label>
                        <input type="text" id="gender" class="form-control" name="gender" value="{{ $student->placement->gender->name}}" required readonly/>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="status">Status <span style="color: red">*</span></label>
                        <input type="text" id="status" class="form-control" name="status" value="{{ $student->placement->status->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Programme <span style="color: red">*</span></label>
                        <input type="text" id="programme" class="form-control" name="programme" value="{{ $student->placement->programme->name }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="index">Track <span style="color: red">*</span></label>
                        <input type="text" id="track" class="form-control" name="track" value="{{ $student->placement->track }}" required  readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="aggregate">Aggregate <span style="color: red">*</span></label>
                        <input type="text" id="aggregate" class="form-control" name="aggregate" value="{{ $student->placement->aggregate }}" required readonly/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback date id">
                        <label for="dob">Date of Birth <span style="color: red">*</span></label>
                        <input type="date" id="dob" class="form-control" name="dob"  required value="{{ $student->dob }}"/>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="code">Enrollment Code <span style="color: red">*</span></label>
                        <input type="text" id="code" class="form-control" name="code"  required value="{{ $student->code }}"/>
                        <span style="color: #bb4949">(<i>Can be found on the Enrolment form</i>)</span>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="raw">Raw Score <span style="color: red">*</span></label>
                        <input type="text" id="raw" class="form-control" name="raw"  required value="{{ $student->raw }}"/>
                        <span style="color: #bb4949">(<i>Can be found on the Enrolment form</i>)</span>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback ">
                        <label for="pob">Place of Birth <span style="color: red">*</span></label>
                        <input type="text" id="pob" class="form-control" name="pob"  required value="{{ $student->pob }}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="house">House Allocated <span style="color: red">*</span></label>
                        <input type="text" id="house" class="form-control" name="house_idd"  value="{{ $student->house->name }} ({{ $student->house->number->num }})({{ $student->house->color->name }})" readonly />
                        <input type="hidden" id="house_id" class="form-control" name="house_id" style="display: none" value=" {{ $student->house->id }}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feeadmission">
                        <label for="bsch">Basic School(JHS) <span style="color: red">*</span></label>
                        <input type="text" id="bschool" class="form-control" name="bschool"  value="{{ $student->bschool }}" />
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="nation">Nationality <span style="color: red">*</span></label>
                        <input type="text" id="nationality" class="form-control" name="nationality"  value="{{ $student->nationality }}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="region">Region <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="region" id="region">
                            <option value="" class="r">Choose Region</option>
                            @foreach($regions as $region)
                            <option value="{{ $region->id }}" {{ $student->region->id == $region->id? 'selected': '' }} >{{ $region->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="home">District <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="district" id="district">
                            <option value="" >Choose District</option>
                            @foreach($districts as $district)
                            <option value="{{ $district->id }}" {{ $student->district->id == $district->id? 'selected': '' }} >{{ $district->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="home">Home Town <span style="color: red">*</span></label>
                        <input type="text" id="home" class="form-control" name="home"  value="{{ $student->town }}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="houseNumber">Residential Address <span style="color: red">*</span></label>
                        <input type="text" id="houseNumber" class="form-control" name="raddress"  value="{{ $student->raddress }}" />
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="religion">Religious Affiliation <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="religion_id" id="religion">
                            <option value="" class="r">Choose Religion</option>
                            @foreach($religions as $religion)
                            <option value="{{ $religion->id }}" {{ $student->religion->id == $religion->id? 'selected': '' }} >{{ $religion->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="disability">Disability</label>
                        <select class="form-control has-feedback-left" name="disability_id" id="disability">
                            @foreach($disabilities as $disability)
                            <option value="{{ $disability->id }}" {{ $student->disability->id == $disability->id? 'selected': '' }} >{{ $disability->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="medication">Medications </label>
                        <input type="text" id="medication" class="form-control" name="medication" value="{{ $student->medication?? "N/A"}}" />
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                        <label for="allergy">Allergies</label>
                        <input type="text" id="allergy" class="form-control" name="allergy"  value="{{ $student->allergy?? "N/A" }}" />
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
                            <input type="text" id="fname" class="form-control" name="pname"  value="{{ $parrent->name }}" />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback  foccu">
                            <label for="poccupation">Parent/Guardian's Occupation: <span style="color: red">*</span></label>
                            <select class="form-control has-feedback-left" name="poccupation_id" id="poccupaition">
                                <option value="">Select..</option>
                                @foreach($occupations as $occupation)
                                <option value="{{ $occupation->id }}" {{ $parrent->occupation->id == $occupation->id? 'selected': '' }} >{{ $occupation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="ftown">Parent/Guardian's Home Town: <span style="color: red">*</span></label>
                            <input type="text" id="ftown" class="form-control" name="ptown" value="{{ $parrent->town }}"/>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="fnumber">Parent/Guardian's Phone: <span style="color: red">*</span></label>
                            <input type="text" id="fnumber" class="form-control" name="pnumber" value="{{ $parrent->number }}" />
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="paddress">Parent/Guardian's Residential Address: <span style="color: red">*</span></label>
                            <input type="text" id="paddress" class="form-control" name="paddress" value="{{ $parrent->address }}" />
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="relation">Relationship:</label>
                            <select class="form-control has-feedback-left" name="prelation_id" id="relation">
                                <option value="">Select..</option>
                                @foreach($relations as $relation)
                                <option value="{{ $relation->id }}" {{ $parrent->relation->id == $relation->id? 'selected': '' }} >{{ $relation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        </fieldset>
                        <fieldset>
                            <legend>Emergency Contact</legend>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback ">
                            <label for="mname">Name: <span style="color: red">*</span></label>
                            <input type="text" id="mname" class="form-control" name="ename"  value="{{ $emergency->name }}"/>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="eoccupation">Occupation: <span style="color: red">*</span></label>
                            <select class="form-control has-feedback-left" name="eoccupation_id" id="eoccupaition">
                                <option value="">Select..</option>
                                @foreach($occupations as $occupation)
                                <option value="{{ $occupation->id }}" {{ $emergency->occupation->id == $occupation->id? 'selected': '' }} >{{ $occupation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="etown">Home Town: <span style="color: red">*</span></label>
                            <input type="text" id="etown" class="form-control" name="etown"  value="{{ $emergency->town }}"/>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="enumber">Phone Number: <span style="color: red">*</span></label>
                            <input type="text" id="enumber" class="form-control" name="enumber" value="{{ $emergency->number }}"/>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="eaddress">Residential Address: <span style="color: red">*</span></label>
                            <input type="text" id="eaddress" class="form-control" name="eaddress" value="{{ $emergency->address }}"/>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="erelation">Relationship:</label>
                            <select class="form-control has-feedback-left" name="erelation_id" id="erelation">
                                <option value="">Select..</option>
                                @foreach($relations as $relation)
                                <option value="{{ $relation->id }}" {{ $emergency->relation->id == $relation->id? 'selected': '' }} >{{ $relation->name }}</option>
                                @endforeach
                              </select>
                          </div>
                        </fieldset>

                      <div class="form-group but">
                        <div class="btn-group">
                        <button class="btn btn-btn" type="submit"><i class="fa fa-save mr-1 butt"></i>Update Record</button>
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
