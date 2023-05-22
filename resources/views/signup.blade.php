<link rel="stylesheet" href="{{asset('css/signup.css')}}">
<form action="{{route('getRegisterPage')}}" method="POST" id="register-form">
    @csrf
@extends('layouts.navbar')

@section('content')
        <div class="content-box">
            <div class="login-box">
                <!-- <img src="{{asset('asset/signup-pict.png')}}" class="login-pic-img" /> -->
                <div class="login-auth">

                    <div class="login-auth-h1">
                        <h1>Hi, New User!</h3>
                    </div>

                    <hr>

                    <div class="login-auth-email-box">
                        <img src="{{asset('asset/email-logo.png')}}"  />
                        <input type="email" id="email" name="email" placeholder="Enter your email" value="{{$email}}"/>
                    </div>

                    <div class="login-auth-username-box">
                        <img src="{{asset('asset/username-logo.png')}}"  />
                        <input type="text" id="username" name="username" placeholder="Enter your username"/>
                    </div>
                    <div class="login-auth-password-box">
                        <img src="{{asset('asset/password-logo.png')}}"  />
                        <input type="password" id="password" name="password" placeholder="Enter your password"/>

                    </div>

                    <!-- <a href="#" id="forgotPassword">forgot password?</a> -->
                    <label class="checkBox">
                        <input type="checkbox" name="agree" value="1" id="checkBox-input">
                        <p  id="forgotPassword">I agree to follow PitchedIn's Terms of Service and Privacy Policy</p>
                    </label>

                    <p class="ErrorMessage">sdfdsf</p>

                    <button id="login-btn" class="login-btn">
                        <p>Sign Up</p>
                    </button>
                </div>
                <!-- <img src="{{asset('asset/signup-pict.png')}}" class="login-pic-img" /> -->
                <div class="login-pic-img">
                    <img src="{{asset('asset/logo-pitchedin-black.png')}}" class="logo-pitchedin"/>
                </div>
            </div>

            <div class="add-info">
                <p>Already have an account?&nbsp; <a href="{{route('getLoginPage')}}" class="sign-up-btn">Log In</a></p>
            </div>
        </div>



        <div class="detail-signup-form">
            <div class="detail-signup">
                <div class="detail-signup-opening">
                    <h1 class="detail-judul1">You are only</h1>
                    <h1 class="detail-judul2">ONE step closer!</h1>
                    <p class="detail-signup-note">Fill in your informations, so we can get to know</p>
                    <p class="detail-signup-note">you better!</p>
                    <div class="btn-container">
                        <button type="submit" class="btn-detail-signup">
                            Continue
                        </button>
                    </div>

                </div>
                <div class="container-detail-signup">
                    <div class="detail-signup-data">
                        <input type="text" id="fullname" name="fullname" class="enter-fullname-text" placeholder="Full Name"/>
                        <hr class="detail-signup-hr">
                        <input type="text" id="country" name="country" class="enter-country-text" placeholder="Country"/>
                        <hr class="detail-signup-hr">
                        <input type="text" id="state" name="state" class="enter-state-text" placeholder="State"/>
                        <hr class="detail-signup-hr">
                        <br>


                        <p id="errorMessage2"></p>

                        <div class="role-signup" id="role-signup">
                            <div class="role-sign-up-group">
                                <p>I'm Signing Up as &nbsp;</p>
                                <p id="role-p"></p>
                                <input id="role-input" type="text" name="role" style="display: none" value="">
                            </div>
                            <img src="{{asset('asset/Dropdown_arrow_white.png')}}">
                        </div>

                        <div class="pitcher-role">
                            <label>Pitcher
                            </label>
                        </div>
                        <div class="investor-role">
                            <label>Investor
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <img src="{{asset('asset/eclipse-signup.png')}}" class="eclipse-signup"/>

        </div>
    </form>

    <script src="{{asset('js/signup.js')}}"></script>
@endsection
