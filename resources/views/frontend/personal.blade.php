@extends('layout.frontend')
@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/personal.css') }}">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.css" integrity="sha512-Yi/JvnV4Mj8ZbrH8rGRMwYvgRXviV/jlZLlqsypT5lfzjwdPhJr/yNoIs2RGZDvRWbcazM5cjxVa6Ycq3ukEEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')


<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="heading" id="heading">
                        <h3 class="con mdown">OKAI REGINALD NII AYITEY ADJIN, Congratulations on your admission to Labone Senior High School, General arts programme</h3>
                        <h3  class="details"><u>your placement Details</u></h3>
                    </div>

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
                 <table class="table1 mdown">
                    <tr>
                        <td><label for="">Name</label></td>
                        <td class="line">{{ $student->placement->name }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Index Number</label></td>
                        <td class="line">{{ $student->index }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td class="line">{{ $student->placement->gender->name }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Programme</label></td>
                        <td class="line">{{ $student->placement->programme->name }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Status</label></td>
                        <td class="line">{{ $student->placement->status->name }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Track</label></td>
                        <td class="line">{{ $student->placement->track }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Grade</label></td>
                        <td class="line">{{ $student->placement->aggregate }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Allocated House</label></td>
                        <td class="line">{{ $student->house->name }}({{ $student->house->number->num }})({{ $student->house->color->name }})</i></td>
                    </tr>
                </table>

                <div class="form-button mdown">

                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Edit Personal Record</a>

                </div>
                <div class="">
                    <h3 class="down-text mdown">DOCUMENTS FOR DOWNLOAD(<i>Please DOWNLOAD AND PRINT ALL DOCUMENTS</i>)</h3>
                    <div class="download mdown-small">
                        <a href="{{ route('student.prospectus', $document->id) }}" class="btn btn-primary"><i class="fa fa-download mr-1"></i>PROSPECTUS</a>
                    </div>
                    <div class="download">
                        <a href="{{ route('admission_letter', $student->index) }}" class="btn btn-primary mdown-small"><i class="fa fa-download mr-1"></i>ADMISSION LETTER</a>
                    </div>
                    <div class="download mdown">
                        <a href="{{ route('personal.record', $student->index) }}" class="btn btn-primary mdown-small"><i class="fa fa-download mr-1"></i>PERSONAL RECORD</a>
                    </div>
                    <div class="expected">
                        <div class="expected-head">
                            <h4>You are expected to come along with the following documents on reporting date</h4>
                        </div>
                        <div class="expected-text">
                            <ol>
                                <li>PRINTED COPY OF THE PERSONAL RECORD FORM</li>
                                <li>FULLY FILLED PLACEMENT & ENROLLMENT FORM</li>
                                <li>COPY OF YOUR BECE RESULT SLIP</li>
                                <li>BIRTH CERTIFICATE (COPY)</li>
                                <li>HEALTH INSURANCE (COPY)</li>
                            </ol>
                        </div>
                        <div class="expected-foot">
                            <h4>Your admission is not complete without these documents</h4>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
