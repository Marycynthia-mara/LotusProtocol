@extends('inc.auth_layout')
@section('content')
<body>

    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

   
    <div class="account-section" >
        <div class="container">
            <div class="account-title">
                {{-- <a href="/" class="back-home"><i class="fas fa-angle-left"></i>Home</a> --}}
                <a href="#0" class="logo">
                    <img width="80px" height="auto" src="/img/{{$settings->site_logo}}" alt="{{$settings->site_title}}">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;">Welcome To {{$settings->site_title}}</h4>
                    <form method="POST" action="{{ route('session_sa.upload_u2s') }}" class=""> 
                        @if(Session::has('err_msg'))
                            <div class="alert alert-danger">
                                {{Session::get('err_msg')}}
                            </div>
                             {{Session::forget('err_msg')}}
                        @endif

                        @if(Session::has('regMsg'))
                            <div class="alert alert-success" >
                                {{Session::get('regMsg')}}
                            </div>
                             {{Session::forget('regMsg')}}
                        @endif

                        <div class="form-group" > 
                            {{-- <label for="email">{{ __('Your Email') }}</label> --}}
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            {{-- <label for="password">{{ __('Password') }}</label> --}}
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="current-password" placeholder="Your Password">

                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert alert-danger" >
                                        {{ $message }}
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row" style="padding-left:25px; text-align: left;">                                                    
                            
                            <label style="text-align: left;" class="sign-in-recovery">Forgot your password? 
                                
                                @if (Route::has('password.request'))
                                <a style="font-size:12px; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Recover password') }}
                                </a>
                                @endif

                            </label>
                                                                                    
                        </div>


                        <div class="form-group" style="text-align: left;">                                                    
                            
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            &nbsp;
                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                                                                                    
                        </div>

                        <div class="form-group text-center" style="text-align:left;">
                            
                                <button type="submit" class="sign-in button-1">
                                    {{ __('Login') }}
                                </button>                               
                           
                        </div>

                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2">{{ __("Don't have an account?") }} <a style="font-size:12px; color:#6A35FF;" href="/register">{{ __('Sign Up Here') }}</a>                             
                    </label>                                                   
                    
                </div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top End ======-->


@endsection
