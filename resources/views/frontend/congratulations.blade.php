<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/congrat.css') }}" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Labone Admission</title>
  </head>
  <body>
    <div class="page-body">
      <div class="panel panel-primary">

        <div class="panel-heading"><h2 class="heading-tertiary">Labone senior high online admission</h2></div>
        <div class="panel-body">
        
        <p class="hi">Hi {{ $admission->name }},</p>
        <p class="message">You have been placed in <span class="sch">Labone Senior High School</span> and you are <span class="req">REQUIRED</span> to <span class="pay">buy a token</span> to access this system.</p>
        <div class="but">
                <form class="form-horizontal form-label-left input_mask form" method="POST" action="{{ route('pay')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="email" value="laboneshs@admission.com">
                    <input type="hidden" name="amount" value="30">
                    <input type="hidden" name="index" value="{{ $admission->index }}">
                <button type="submit" class="btn btn-primary butt">
                    <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                    <span class="btn-txt">Continue to Payment</span>
                </button>
                </form>
            <div class="power">

                <p><span class="pow">Powered by :</span> <span class="won">Wonda</span><span class="tek">Tek</span></p>
            </div>

        </div>
        </div>
      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontend/js/congrat.js') }}"></script>
  </body>
</html>
