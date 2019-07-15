<html lang="en">
    
<!-- Mirrored from forum.azyrusthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 04:37:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>

        <!-- Bootstrap -->
        <link href="{{asset('layouts/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{asset('layouts/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('layouts/font-awesome-4.0.3/css/font-awesome.min.css')}}">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="{{asset('layouts/css/style.css')}}" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('layouts/rs-plugin/css/settings.css')}}" media="screen" />

    </head>

    <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="{{asset('layouts/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js')}}"></script>
 

 <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
 <script type="text/javascript" src="{{asset('layouts/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('layouts/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

 <script src="{{asset('layouts/js/bootstrap.min.js')}}"></script>


 <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
 <script type="text/javascript">
     
     var revapi;

     jQuery(document).ready(function() {
         "use strict";
         revapi = jQuery('.tp-banner').revolution(
                 {
                     delay: 15000,
                     startwidth: 1200,
                     startheight: 278,
                     hideThumbs: 10,
                     fullWidth: "on"
                 });

     });	//ready

 </script>
</body>
 </html>

