<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme templete">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme templete">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('templete/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('templete/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('templete/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('templete/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('templete/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h1>Register</h1>
                            </a>
                        </div>

                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-checkbox{{ $errors->has('terms') ? ' has-error' : '' }}">
                            <label>
                              <input type="checkbox" name="terms" value="1" /> Agree the terms and policy
                            </label>
                          
                            <div class="col-md-4">
                              @if ($errors->has('terms'))
                               <span class="help-block">
                                 <strong>{{ $errors->first('terms') }}</strong>
                               </span>
                              @endif
                            </div>
                          </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                            </div>
                        </div>
                    </form>
                    <div class="register-link">
                        <p>
                            Already have account?
                            <a href="/login">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('templete/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('templete/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{ asset('templete/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('templete/vendor/slick/slick.min.js"')}}>
</script>
<script src="{{ asset('templete/vendor/wow/wow.min.js"')}}></script>
<script src="{{ asset('templete/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{ asset('templete/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{ asset('templete/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('templete/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{ asset('templete/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{ asset('templete/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('templete/vendor/chartjs/Chart.bundle.min.js"')}}></script>
<script src="{{ asset('templete/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{ asset('templete/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
