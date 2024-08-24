@extends('layout.backend')

@section('styles')
<link href="{{ asset('backend/vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')

          <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bulk Protocol</h2>
                    <a href="{{route('placement.index')}}" class="btn btn-success btn-sm float-right">
                      <i class="fa fa-th-large mr-1"></i>All Protocols
                    </a>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>Drag protocol file to the box below to upload multiple protocols  or click to select protocol file.</p>
                    <form action="{{ route('placement.bulk.protocol') }}" class="dropzone" method="POST" enctype="multipart/form-data" id="protocol">@csrf</form>
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
<script src="{{ asset('backend/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>
<script>
  Dropzone.options.protocol = {
    acceptedFiles: ".xlsx, .xlsm, .xlsb, .xltx, .xls, .xlt, .xlm",
    success: function(file, response){
      swal({ title: "Success!", text: "Placement Imported Successfully", type: "success", timer: 3000 });

    },
  };
</script>
@endsection
