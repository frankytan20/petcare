
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Petcare - Register</title>
  <link rel="icon" type="image/css" href="{{url('favicon.png')}}">

  <!-- Custom fonts for this template-->
  <link href="{{url('theme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{url('theme/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account   {{config('app.name')}}</div>
      <div class="card-body">
        <form method="POST" action="{{route('register')}}">
          @csrf
          <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="Name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" placeholder="Name" value="{{ old('name')}}" required="required" autofocus="autofocus">
                <label for="Name">Name</label>
                 @if($errors->has('name'))
              <div class="invalid-feedback">{{$errors->first('name')}}</div>
                @endif
              </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" placeholder="Email address" value="{{ old('email')}}" required="required">
              <label for="inputEmail">Email address</label>
               @if($errors->has('email'))
              <div class="invalid-feedback">{{$errors->first('email')}}</div>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"  name="password" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                   @if($errors->has('password'))
                    <div class="invalid-feedback">{{$errors->first('password')}}</div>
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" name="password_confirmation" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                      @if($errors->has('password_confirmation'))
                      <div class="invalid-feedback">{{$errors->first('password_confirmation')}}</div>
                      @endif
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{route('login')}}">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{url('theme/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('theme/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>
