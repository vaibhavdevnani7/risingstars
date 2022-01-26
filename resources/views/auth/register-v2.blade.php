<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <script>
            WebFontConfig = { google: { families: ["Nunito Sans:400,400i,700,700i,800,800i,900,900i:latin,latin-ext", "Quicksand:300,400,700:latin,latin-ext", "Caveat:400,700:latin,latin-ext"] } };
            if (typeof WebFont === "object" && typeof WebFont.load === "function") {
                WebFont.load(WebFontConfig);
            }
        </script>
        <script id="litespeed-webfont-lib" src="{{asset('assets/assetwebfontloader.min.js')}}" defer></script>
        <!--maincss--->
        <link data-optimized="2" rel="stylesheet" href="{{asset('assets/css/81e4c-1.css?v='.date('ymdhis'))}}" />
        <link data-optimized="1" rel="stylesheet" href="{{asset('assets/css/style-1.css?v='.date('ymdhis'))}}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}" id="jquery-core-js"></script>
        <script data-optimized="1" src="{{asset('assets/js/66a54.js?ceb66')}}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="initial-scale=1.0" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />
        <meta name="theme-color" content="#056EB9" />
        <meta name="msapplication-navbutton-color" content="#056EB9" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />
        <title>Rising Star</title>
        <meta name="robots" content="noindex,nofollow" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="dns-prefetch" href="//s.w.org" />
        <!-- <link rel="alternate" type="application/rss+xml" title="Techland &raquo; Feed" href="https://ninetheme.com/themes/techland/feed/" /> -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        @yield('header-script')
        <style type="text/css">
            .error{
                font-size: 10px;
                color: red;
            }
        </style>
        <script type="text/javascript">
            let baseUrl = '{{url('/')}}';
        </script>
    </head>
    <body class="home page-template page-template-custom-page page-template-custom-page-php page page-id-19 theme-techland nt-shortcode-1.0 woocommerce-no-js Techland nt-version-1.0 wpb-js-composer js-comp-ver-6.4.1 vc_responsive">
       
            
            <main>
                 {{-- @include('web.includes.menu') --}}
                <div class="loginSection"> 
                  <!-- Main Content -->
                    <div class="container-fluid">
                      <div class="row main-content bg-success text-center">
                        <div class="col-md-7 text-center company__info">
                          <span class="company__logo">
                            <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/login.svg">
                          </span>
                          <div class="welcome-text mt-2">
                            <h3>Welcome aboard my friend</h3>
                            <div class="welcome-sub-text">Just couple of click and we start</div>
                          </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12 login_form ">
                          <div class="container-fluid">
                            <a href="{{url('/')}}"><div class="row" >
                              <img style="display: block;
    margin-left: auto;
    margin-right: auto;"  width="100px" src="https://rising-star-img.s3.ap-south-1.amazonaws.com/AlgoCap_Logo.png">
                            </div></a>
                            <div class="row">
                              <h4>Welcome to the Future</h4>
                            </div>
                            <div class="row">
                                @if(session('message'))
                                    <div class="alert alert-danger">{{session('message')}}</div>
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                          <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/mail.png">
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                          <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/mail.png">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/lock.png">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/lock.png">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- @if (Route::has('password.request'))
                                      <div class="form-group">
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                      </div>
                                    @endif --}}


                                  <button type="submit" class="btn btn-primary">Register</button>
                                  <div class="form-group">
                                     <span class="hrLine">or</span>
                                  </div>
                                  <div class="row mb-5">
                                    <div class="col-md-6">
                                        <a href="{{ url('/g_redirect') }}" class="outLine"><img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/google.svg"> <span>Google</span></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ url('/linkedin-redirect') }}"  class="outLine"><img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/linkedin.svg"> <span>Linkedin</span></a>
                                    </div>
                                  </div>
                                  <div class="form-group">
                              <div class="w-100 mb-3">
                                 <p>Have you account with us?</p>
                              </div>
                              <div class="w-100">
                                 <a href="{{url('/login')}}"  class="outLine"><span>Click here to Login</span></a>
                              </div>
                            </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </main>

          <script data-optimized="1" src="{{asset('assets/js/663cb.js?bb5d7')}}" defer></script>
          <script src="{{asset('assets/js/application.js?v='.date('his'))}}"></script>
          <script src="{{asset('assets/js/custom-validation-form.js?v='.date('his'))}}"></script>
          @yield('footer-script')
      </body>
</html>
                