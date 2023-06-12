@extends('layouts.navbar')
@section('content')
    <link rel="stylesheet" href="{{asset('css/activity.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive/activity.css')}}"/>

    <div class="responsive_menu">
        <div class="responsive_menu_content">
            <img src="{{asset('asset/explore_back.png')}}" class="menu_back_symbol"/>
            <h3>Menu</h3>
            <div class="explore_menu">
                <img src="{{asset('asset/lp2_compas.png')}}" class="menu_logo"/>
                <p class="menu_text">Explore</p>
            </div>
            <div class="create_menu">
                <img src="{{asset('asset/plus_lp2.png')}}" class="menu_logo"/>
                <p class="menu_text">Create</p>
            </div>
            <div class="forum_menu">
                <img src="{{asset('asset/chat_lp2.png')}}" class="menu_logo"/>
                <p class="menu_text">Forum</p>
            </div>

            <div class="tips_menu">
                <img src="{{asset('asset/idea_lp2.png')}}" class="menu_logo"/>
                <p class="menu_text">Tips</p>
            </div>

            <div class="signUp_menu">
                <img src="{{asset('asset/signUp.png')}}" class="menu_logo"/>
                <p class="menu_text">Sign Up</p>
            </div>

            <div class="logIn_menu">
                <img src="{{asset('asset/logIn.png')}}" class="menu_logo"/>
                <p class="menu_text">Log In</p>
            </div>
        </div>
    </div>

    <div class="saved_post_page">
        <div class="explore_left">
            <div class="user_profile1">
                <div class="color_circle_pp">
                    <div class="white_circle_pp">
                        <img src="{{asset('asset/anonymous.png')}}"/>
                    </div>
                    <div class="online_status">
                        <div class="online_green">

                        </div>
                    </div>
                </div>
                <div class="user_data">
                    <h3>{{$profile->fullname}}</h3>
                    <p>{{$profile->state . ', ' . $profile->country}}</p>
                </div>
                <p>{{$profile->bio}}</p>

                <div class="connect_and_chat">
                    <a href="{{route('getProfile', ['id' => Auth::user()->id])}}">
                        <div class="connect">
                            View Profile
                        </div>
                    </a>
                    <img src="{{asset('asset/chat_logo.png')}}"/>
                </div>
            </div>

            <div class="bottom_explore_left_alt">
                <div class="bottom_explore_left_inside">
                    <ul>
                        Contact Us
                        <li>Terms of Service</li>
                        <li>FAQ</li>
                    </ul>
                    <ul>
                        Privacy Policy
                        <li>Instagram</li>
                    </ul>
                    <ul>
                        Facebook
                        <li>Twitter</li>
                    </ul>
                    <ul>
                        &#169;&nbsp;Copyright 2023 PitchedIn.
                    </ul>
                </div>

            </div>
            <div class="bottom_explore_left">
                <div class="bottom_explore_left_inside">
                    <ul>
                        Contact Us
                        <li>Terms of Service</li>
                        <li>Privacy Policy</li>
                    </ul>
                    <ul>
                        FAQ
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                    </ul>
                    <ul>
                        &#169;&nbsp;Copyright 2023 PitchedIn.
                    </ul>
                </div>
            </div>
        </div>

        <div class="saved_post_right">
            <div class="container_right_h2">
                <h2>Saved Posts & Activities</h2>
            </div>

            <div class="container_garis_judul">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/tips_logo.png')}}" class="saved_tips_img"/>
                    <p><a href="{{route('getSavedPosts', ['id' => $profile->id])}}">Saved Tips</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
            <div class="section_hr">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/forum_logo.png')}}"/>
                    <p><a>Saved Forum</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
            <div class="section_hr">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/interactions_logo.png')}}"/>
                    <p><a>Interactions</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
            <div class="section_hr">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/recent_logo.png')}}"/>
                    <p><a>Recent Searches</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
            <div class="section_hr">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/link_logo.png')}}"/>
                    <p><a>Links Visited</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
            <div class="section_hr">
                <hr>
            </div>

            <div class="saved_post_section">
                <div class="saved_post_section_name">
                    <img src="{{asset('asset/time_logo.png')}}"/>
                    <p><a>Time Spent</a></p>
                </div>
                <a href="{{route('getSavedPosts', ['id' => $profile->id])}}"><img src="{{asset('asset/right_vp2.png')}}"/></a>
            </div>
        </div>

    </div>
@endsection
