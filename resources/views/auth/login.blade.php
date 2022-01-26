@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div  style="padding:20px">
                    @if(session('message'))
                        <div class="alert alert-danger">{{session('message')}}</div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">OR</div>
                    <br>
                    
                    
                    <div class="with text-center" style="width:100%" >
                        <div class="" style="border:1px solid #ccc; width:100%; padding:7px; ">
                            <a href="{{ url('/g_redirect') }}" class="" style="color:#000; text-decoration: none"><img alt="Google" width="25px" src="{{asset('assets/img/google.png')}}" class="MuiAvatar-img"> <span>Continue with Google</span></a>
                        </div>
                    </div>
                    <div class="with text-center" style="width:100%; margin-top:10px;" >
                        <div class="" style="border:1px solid #ccc; width:100%; padding:7px;  ">
                            <a href="{{ url('/linkedin-redirect') }}" style="color:#000; text-decoration: none" class=""> <img alt="linkedin" width="30px" src="{{asset('assets/img/linkedin.png')}}" class="MuiAvatar-img"> Login With Linkedin </a>
                            
                        </div>
                    </div>
                    
                   {{--  <div class="flex items-center justify-end mt-4">
                        <a class="btn" href="{{ url('twitter-redirect') }}"
                            style="background: #1E9DEA; padding: 10px; width: 100%; text-align: center; display: block; border-radius:4px; color: #ffffff;">
                            Login with Twitter
                        </a>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
