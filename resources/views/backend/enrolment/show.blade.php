@extends('layout.backend')
@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/enrolmentlist.css') }}">
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
                <h2>Student Details</h2>
                <a href="{{route('student.enrol')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-arrow-circle-left mr-1"></i>
                  Back
                </a>
                <div class="clearfix"></div>
              </div>
            <div class="x_content">
                <div class="passport mdown-s">
                    <img src="{{ asset('storage/'. $student->photo) }}"  alt="">
                </div>
              @if ($errors->any())
               @foreach ($errors->all() as $error)
                <div class="text-danger">
                    {{ $error }}
                </div>
               @endforeach
           @endif
           <table class="table1 mdown">
              <tr>
                  <td colspan="2" style="background:black; color:white">Student's Information</td>
              </tr>
              <tr>
                  <td ><span class="bold">Name:</span> {{ $student->placement->name }}</td>
                  <td class="line"> <span class="bold">programme: </span>{{ $student->placement->programme->name }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Index Number:</span> {{ $student->index }}</td>
                  <td class="line"> <span class="bold">Allocated House:</span> {{ $student->house->name }}({{ $student->house->number->num }})({{ $student->house->color->name }})</td>
              </tr>
              <tr>
                  <td><span class="bold">Date of Birth:</span> {{ $student->dob }}</td>
                  <td class="line"> <span class="bold">Place of Birth:</span> {{ $student->pob}}</td>
              </tr>
              <tr>
                  <td><span class="bold">Status:</span> {{ $student->placement->status->name }}</td>
                  <td class="line"><span class="bold">Gender:</span> {{ $student->placement->gender->name }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Grade:</span> {{ $student->placement->aggregate }}</td>
                  <td class="line"><span class="bold">Track:</span> {{ $student->placement->track }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Raw Score:</span> {{ $student->raw }}</td>
                  <td class="line"><span class="bold">nationality:</span> {{ $student->nationality }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Region:</span> {{ $student->region->name }}</td>
                  <td class="line"><span class="bold">District:</span>  {{ $student->district->name }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Basic School(JHS):</span> {{ $student->bschool }}</td>
                  <td class="line"><span class="bold">Home Town:</span> {{ $student->town }}</td>
              </tr>
              <tr>
                  <td><span class="bold">Enrolment Code:</span> {{ $student->code }}</td>
                  <td class="line"><span class="bold">Residential Address:</span> {{ $student->raddress }}</i></td>
              </tr>
              <tr>
                  <td><span class="bold">Religion:</span> {{ $student->religion->name }}</td>
                  <td class="line"><span class="bold">Disability:</span> {{ $student->disability->name }}</i></td>
              </tr>
              <tr>
                  <td><span class="bold">Medications:</span> {{ $student->medication }}</td>
                  <td class="line"><span class="bold">Allergies:</span> {{ $student->allergy}}</i></td>
              </tr>
              <tr>
                <td colspan="2" style="background:black; color:white">Parent/Guardian's Information</td>
                </tr>
              <tr>
                  <td><span class="bold">Parent/Guardian's name:</span> {{ $parent->name }}</td>
                  <td class="line"><span class="bold">Parent/guardian's Occupation:</span> {{ $parent->occupation->name }}</i></td>
              </tr>
              <tr>
                  <td><span class="bold">Parent/Guardian's Home Town:</span> {{ $parent->town }}</td>
                  <td class="line"><span class="bold">Parent/Guardian's phone:</span> {{ $parent->number }}</i></td>
              </tr>
              <tr>
                <td><span class="bold">Address:</span> {{ $parent->address }}</td>
                <td class="line"><span class="bold">Relationship:</span> {{ $parent->relation->name }}</i></td>
            </tr>
              <tr>
                <td colspan="2" style="background:black; color:white">Emergency Contact</td>
                </tr>
              <tr>
                  <td><span class="bold">Name:</span> {{ $emergency->name }}</td>
                  <td class="line"><span class="bold">Occupation:</span> {{ $emergency->occupation->name }}</i></td>
              </tr>
              <tr>
                  <td><span class="bold">Home Town:</span> {{ $emergency->town }}</td>
                  <td class="line"><span class="bold">Phone Number:</span> {{ $emergency->number }}</i></td>
              </tr>
              <tr>
                  <td><span class="bold">Address:</span> {{ $emergency->address }}</td>
                  <td class="line"><span class="bold">Relationship:</span> {{ $emergency->relation->name }}</i></td>
              </tr>
                <td colspan="2" style="background:black; color:white"></td>
                </tr>
          </table>

          <div class="form-button mdown">

                  <a href="{{ route('student.edit.enrolment', $student->id) }}" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Edit Student Record</a>

          </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
