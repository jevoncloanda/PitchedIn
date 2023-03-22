<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitchedIn</title>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    @guest
    <header>
        <a href="{{route('getHomePage')}}">
            <img src="{{asset('asset/logo_pitchedin.png')}}" id="logo"/>
        </a>

        <div id="nav-group">
            <a href="#" class="nav">Explore</a>
            <a href="#" class="nav">Create</a>
            <a href="#" class="nav">Forum</a>
            <a href="#" class="nav">Tips</a>
        </div>

        <div id="auth-group">
            <a href="{{route('login')}}" class="auth">
                <p>Sign Up</p>
            </a>
            <a href="{{route('login')}}" class="auth">
                <p>Log In</p>
            </a>
        </div>
    </header>
    @endguest
    @auth
    <header>
        <a href="{{route('getHomePage')}}">
            <img src="{{asset('asset/logo_pitchedin.png')}}" id="logo"/>
        </a>

        <div id="nav-group">
            <a href="#" class="nav">Explore</a>
            <a href="#" class="nav">Create</a>
            <a href="#" class="nav">Forum</a>
            <a href="#" class="nav">Tips</a>
        </div>


        <div id="pp_welcome_dropdown">
            <a href="#" class="pp-circle">
                <img src="{{asset('asset/Dummy_Profile_Picture.png')}}" class="pp-img">
            </a>

            <p id="hi-p">Hi,&nbsp;</p>
            <p id="name-p">Reyhan</p>
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
                <p class="dropDown-konten-noBold-p">Sign Out</p>
            </div>
        </div>
    </header>
    @endauth

    <a type="submit" href="{{route('logout')}}">Logout</a>

    <script src="{{asset('js/navbar.js')}}"></script>
</body>
</html>
