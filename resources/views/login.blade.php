<link rel="stylesheet" href="{{asset('css/login.css')}}">
@extends('layouts.navbar')
@section('content')
        <div class="content-box">
            <form class="login-box" action="{{route('getLoginPage')}}" method="POST">
                @csrf

                <!-- <img src="{{asset('asset/login-pict.png')}}" class="login-pic-img" /> -->
                <div class="login-pic-img">
                    <img src="{{asset('asset/logo_pitchedin.png')}}" class="logo-pitchedin"/>
                </div>
                <div class="login-auth">

                    <div class="login-auth-h1">
                        <h1>WELCOME</h3>
                        </div>

                        <hr>
            <div class="login-auth-username-box">
                <img src="{{asset('asset/username-logo.png')}}"  />
                <input type="text" id="username" name="login" placeholder="Enter your username"/>
            </div>
            <div class="login-auth-password-box">
                <img src="{{asset('asset/password-logo.png')}}"  />
                <input type="password" id="password" name="password" placeholder="Enter your password"/>

            </div>

            <p class="errorMessage"></p>

            <a href="#" id="forgotPassword">forgot password?</a>

            <button type="submit" id="login-btn" class="login-btn">
                <p>Login</p>
            </button>


            <p id="or">or</p>

            <a class="ContinueWithGoogle-btn" href="{{ url('redirect/google') }}">
                <p>Continue with Google</p>
            </a>

            <a class="ContinueWithFacebook-btn" href="{{ url('redirect/facebook') }}">
                <p>Continue with Facebook</p>
            </a>
            <!-- <img src="{{asset('asset/logo_pitchedin.png')}}" class="logo_pitchedin"/> -->

        </form>

        </div>


        <div class="add-info">
            <p>By continuing, you agree to PitchedIn’s Terms of Service & Privacy Policy</p>
            <p>Not on PitchedIn yet?&nbsp; <a href="{{route('getRegisterPage')}}" class="sign-up-btn">Sign Up</a></p>
        </div>


        <div class="modal">
            <div class="modal-box">

                <div class="modal-box-up">
                    <div class="modal-box-up-konten">
                        <h2 class="modal-first-h2">Oops, Did You Forget</h2>
                        <h2 class="modal-second-h2">Your Password?</h2>


                        <div class="model-box-up-konten-info-group">
                            <p class="model-box-up-konten-info">Tell us your email, and we will send you a link</p>
                            <p class="model-box-up-konten-info">to reset your password!</p>
                        </div>

                    </div>

                    <div class="modal-box-up-close" id="close-modal">
                        <img src="{{asset('asset/close.png')}}"/>
                    </div>

                </div>


                <form class="enter-email-box"method="POST">
                    <input type="email" id="email" name="email" class="enter-email-text" placeholder="Enter your email"/>
                    <button type="submit" id="enter-email-btn" class="enter-email-btn">
                        <img src="{{asset('asset/right-arrow.png')}}"/>
                    </button>
                </form>

                <p id="modal_errorMessage"></p>


                <div class="modal-box-bottom">
                    <div class="resend-link">
                        <p class="resend-link-black" id="resend-btn">Resend Link&nbsp;</p>
                        <p class="resend-link-green" id="modal-timer"></p>
                    </div>
                </div>

            </div>
        </div>

    <script src="{{asset('js/login.js')}}"></script>
@endsection
