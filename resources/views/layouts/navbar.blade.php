<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitchedIn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    @guest
    <header>
        <a href="{{route('getLandingPage')}}">
            <img src="{{asset('asset/logo_pitchedin.png')}}" id="logo"/>
        </a>

        <div id="nav-group">
            <a href="{{route('getBusinesses')}}" class="nav">Explore</a>
            {{-- <a href="{{route('getCreateBusiness')}}" class="nav">Create</a> --}}
            <a href="{{route('getForumPage')}}" class="nav">Forum</a>
            {{-- <a href="#" class="nav">Tips</a> --}}
        </div>

        <div id="auth-group">
            <a href="{{route('getRegisterPage')}}" class="auth">
                <p>Sign Up</p>
            </a>
            <a href="{{route('getLoginPage')}}" class="auth">
                <p>Log In</p>
            </a>
        </div>
    </header>
    <script src="{{asset('js/navbarOut.js')}}"></script>
    @endguest
    @auth
    <header>
        <a href="{{route('getLandingPage')}}">
            <img src="{{asset('asset/logo_pitchedin.png')}}" id="logo"/>
        </a>

        <div id="nav-group">
            <a href="{{route('getBusinesses')}}" class="nav">Explore</a>
            <a href="{{route('getCreateBusiness')}}" class="nav">Create</a>
            <a href="{{route('getForumPage')}}" class="nav">Forum</a>
            <a href="{{route('getTips')}}" class="nav">Tips</a>
        </div>


        <div id="pp_welcome_dropdown">
            <a href="#" class="pp-circle">
                <img src="{{asset('asset/anonymous.png')}}" class="pp-img">
            </a>
            <?php
                $username = Auth::user()->username;
            ?>
            <p id="hi-p">Hi,&nbsp;</p>
            <p id="name-p">{{$username}}</p>
            <a href="#" id="dropDown-circle">
                <img src="{{asset('asset/Dropdown_Arrow.png')}}" id="dropDown-img">
            </a>

            <div class="dropDown-konten-group">
                <p class="dropDown-konten-bold-p">Account</p>
                <p class="dropDown-konten-noBold-p">View Profile</p>
                <p class="dropDown-konten-noBold-p">Settings & Privacy</p>
                <p class="dropDown-konten-noBold-p">Help</p>
                <br>
                <p class="dropDown-konten-bold-p">Manage</p>
                <p class="dropDown-konten-noBold-p">Saved Posts & Activity</p>
                <p class="dropDown-konten-noBold-p"><a href="{{route('logout')}}">Sign Out</a></p>
            </div>
        </div>
    </header>
    <script src="{{asset('js/navbar.js')}}"></script>
    @endauth

    @yield('content')
</body>
</html>
