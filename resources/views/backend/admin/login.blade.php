

<!DOCTYPE html>
<html>
  <head>
    <title> Labone SHS Admission Wizard | Login </title>
    <!--Made with love by Mutiullah Samim -->
    <link rel="shortcut icon" href="{{asset('backend/img/uglo.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/css/index.css')}}">

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.cs">
</head>
<body>

    <div class="container">
         <div class="row">

        <img src="{{asset('backend/img/lashs.png')}}" style="height: 170px">

        </div>

            <div class="row">
                <div class="col-md-8"> </div>
                    <div class="col-md-4" style=" height: 250px; margin-top: 150px; background-color: #153d6fe0;height: 370px;
                        margin-top: auto;
                       margin-bottom: auto;
                        width: 400px; border-radius: 25px;">
                        <div class="card-body">

                     <div class="row">

                      <h4 class="text-center" style="color:#d9dddc; text-align: center; margin-left: 50px"><span style="font-weight: 50px; font-size: 40px; font-family: "Times New Roman";>AD</span>MISION WIZARD</h4>
                     </div>
                    <div class="card-body">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                    <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                             <input type="email" name="email" class="form-control" placeholder="email"  value="{{ old('email') }}" required autofocus>
                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: white;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <br>
                    <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                           @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group" style="margin-right: 80px; margin-top: 50px;">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>

                    <div class="links">
                        <a class="btn btn-link links" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a
                    </div>

                </form>

            </div>


         </div>


     </div>


    </div>

</body>
</html>


