<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
    rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Labone Admission</title>
  </head>
  <body>

    <div class="page-body">
        <div class="panel panel-success">

            @if ($errors->any())
            @foreach ($errors->all() as $error)
             <div class="text-danger">
                 {{ $error }}
             </div>
            @endforeach
        @endif
            <div class="panel-body">
                <div class="page-header center">
                    <h2 class="heading-secondary">labone senior high school online admssion</h2>
                    <div class="header-image">
                        <img src="{{ asset('frontend/img/header-image.jpg') }}" alt="Header Image">
                    </div>
                </div>
                <div class="notice">
                    <h3>very important notice:</h3>
                </div>
                <div class="alert alert-info mdown">
                    <p>Please ensure that you have printed your
                         <span class="inline">cssps placement form</span> and the <span class="inline">enrollment form</span>.
                          your <span class="inline">enrolment code</span> which can found on on enrolment
                          form, would also be required by this system.
                        <span class="inline">note:</span> your admission will be considered not
                          complete without the enrolment code.
                    </p>
                </div>
                <div class="notice">
                    <h3>Admission Notice:</h3>
                </div>
                <div class="alert alert-info mdown">
                    <p>Please use your <span class="inline">JHS index number</span> to log into the system
                    </p>
                </div>
                <div class="alert alert-info mdown">
                    <p>kindly enter your <span class="inline">B.E.C.E indext Number</span>
                        followed by the year. Eg. (112411120024) to login
                    </p>
                </div>

      <div class="index__form center mdown">
        <div class="form-heading-">
          <h2 class="heading-secondary">Check your admission status</h2>
        </div>
        @if (session()->has('error'))
        <div class="text-danger">{{ session('error') }}</div>
        @endif
        <form action="{{ route('admission') }}" class="form" method="post">
            @csrf

          <div class="form-index form-group">
            <input
              type="number"
              class="form-input"
              placeholder="Index Number"
              name="index"
              required
              id="index"
              autofocus
            />

            <label for="index" class="form-label">Index Number</label>
          </div>
          <div class="form-group btn-group">
            <button class="btn" type="submit">
                <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                <span class="btn-txt">Check Status</span>
            </button>
          </div>
        </form>
      </div>
      <div class="power center">

        <p><span class="pow">Powered by :</span> <span class="won">Wonda</span><span class="tek">Tek</span></p>
    </div>
    </div>
</div>
    </div>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

  </body>
</html>
