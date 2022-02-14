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

   
    <div class="account-section" style="background-image: url('/img/account-bg.jpg');">
        <div class="container">
            <div class="account-title">
                <a href="/" class="back-home"><i class="fas fa-angle-left"></i>Home</a>
                <a href="#0" class="logo">
                    <img width="100px" height="auto" src="/assets/img/footer-logo.png" alt="{{$settings->site_title}}">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;">Let's get started</h4>
                    <form method="POST" action="{{ route('register') }}" class=""> 
                        <input id="csrf" type="hidden"  name="_token" value="{{ csrf_token() }}" >

                        <div class="form-group row" > 
                            <div class="col-sm-6">
                                <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror regTxtBox" name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname" autofocus placeholder="First Name">

                                @error('Fname')
                                    <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-sm-6">
                                <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus placeholder="Last Name">

                                @error('Lname')
                                    <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row"> 
                                                    
                            <div class="col-sm-12">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12">
                               <input id="username" type="username" class="form-control @error('username') is-invalid @enderror regTxtBox" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert alert-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert alert-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                            </div>

                        </div>


                        <?php
                            $usn = App\User::where('username', Session::get('ref'))->get();
                        ?>

                        <div class="row">
                            <div class="">
                                <input id="ref" type="hidden" class="form-control" name="ref" value="@if(count($usn) > 0){{Session::get('ref')}}@endif" >
                            </div>
                        </div>

                        

                        <div class="form-group text-center" style="text-align:left;">
                                <br><br>
                                @if($settings->user_reg == 1)
                                    <button type="submit" class="sign-in button-1">
                                        {{ __('Register') }}
                                    </button>
                                @else
                                    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Registration Locked.</div>
                                @endif
                                <br><br>                              
                           
                        </div>

                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2">{{ __("Already have an account?") }} <a style="font-size:12px; color:#6A35FF;" href="/login">{{ __('Login') }}</a>                             
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
