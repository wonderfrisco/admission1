@extends('layout.backend')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.css" integrity="sha512-Yi/JvnV4Mj8ZbrH8rGRMwYvgRXviV/jlZLlqsypT5lfzjwdPhJr/yNoIs2RGZDvRWbcazM5cjxVa6Ycq3ukEEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.js" integrity="sha512-UlakzTkpbSDfqJ7iKnPpXZ3HwcCnFtxYo1g95pxZxQXrcCLB0OP9+uUaFEj5vpX7WwexnUqYXIzplbxq9KSatw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="upload"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            process: '/admin/document/upload',
            revert: '/admin/document/delete',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
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
                    <h2>Edit {{ $document->name }}</h2>
                    <a href="{{route('document.index')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-arrow-circle-left mr-1"></i>
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
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('document.update', $document->id)}}" enctype="multipart/form-data">
                    @csrf

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="name">Document Name <span style="color: red">*</span></label>
                        <input type="text" id="name" class="form-control" name="name" required value="{{ $document->name }}" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="description">Description <span style="color: red">*</span> </label>
                        <input type="text" id="description" class="form-control" name="description" required value="{{ $document->description }}" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="gender">Gender <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="gender_id" id="gender">
                            <option value="" class="r">Choose Gender</option>
                            @foreach($genders as $gender)
                            <option value="{{ $gender->id }}" {{ $document->gender->id == $gender->id? 'selected': '' }} >{{ $gender->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="status">Status <span style="color: red">*</span></label>
                        <select class="form-control has-feedback-left" name="status_id" id="status">
                            <option value="" class="r">Choose Status</option>
                            @foreach($statuss as $status)
                            <option value="{{ $status->id }}" {{ $document->gender->id == $status->id? 'selected': '' }} >{{ $status->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <label >Document <span style="color: red">*</span> </label>
                        <input type="file" id="upload"  name="document"  />
                      </div>
                      {{-- <div class="ln_solid"></div> --}}
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Update Document</button>
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
