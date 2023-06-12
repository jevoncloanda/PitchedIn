<link rel="stylesheet" href="{{asset('css/postactivity.css')}}">
@extends('layouts.navbar')
@section('content')
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

    <div class="saved_post2">
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

            <div class="bottom_explore_left">
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

        <div class="saved_post2_right">
            <div class="container_right2_judul">
                <h2>My Posts & Activities</h2>
                <div class="remove">
                    <img src="{{asset('asset/remove.png')}}"/>
                    <h2>Remove</h2>
                </div>
            </div>
            <hr class="garis_judul_page2">

            <div class="saved_post2_right_content">

                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_1.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_2.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_3.png')}}"/>
                </div>

                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_1.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_2.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_3.png')}}"/>
                </div>

                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_1.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_2.png')}}"/>
                </div>
                <div class="content_frame">
                    <img src="{{asset('asset/sample_content_3.png')}}"/>
                </div>
            </div>
        </div>
    </div>


    <div class="saved_post2_modal">
        <div class="saved_post2_modal_content">
            <div class="modal_right">
                <img src="{{asset('asset/sample_content_1.png')}}"/>
            </div>
            <div class="modal_left">
                <div class="modal_left_caption">
                    <img src="{{asset('asset/close.png')}}" class="modal_close"/>
                    <div class="modal_caption">
                        <div class="modal_caption_content">

                            <div class="modal_pp_color">
                                <div class="modal_pp_white">
                                    <img src="{{asset('asset/Dummy_Profile_Picture.png')}}"/>
                                </div>
                            </div>

                            <div class="modal_pp_caption_content_data">

                                <h2>Reyhan Dominicus</h2>
                                <br/>

                                <p>Still don’t know how to increase your social media engagement?

                                    Follow these tips!
                                </p>


                                <br/>
                                <p class="tags">#socialmedia #protips #contentcreation</p>

                            </div>

                        </div>
                        <div class="modal_like_dkk">
                            <img src="{{asset('asset/heart-noLike.png')}}" class="heart"/>
                            <img src="{{asset('asset/comment-logo.png')}}" class="comment"/>
                            <img src="{{asset('asset/save-logo.png')}}" class="save"/>
                        </div>
                    </div>
                </div>
                <div class="modal_left_comment">
                    <h2>No comments yet</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="message">
        <div class="message_data">
            <div class="color_pp_message">
                <div class="white_pp_message">
                    <img src="{{asset('asset/Dummy_Profile_Picture.png')}}"/>
                </div>
                <div class="message_pp_online_status">
                    <div class="message_pp_online_green">

                    </div>
                </div>
            </div>
            <h3>Messaging</h3>
            <div class="message_menu">
                <img src="{{asset('asset/three-dot.png')}}"/>
                <img src="{{asset('asset/edit_logo.png')}}"/>
                <img src="{{asset('asset/up_menu.png')}}" id="menu_up"/>
            </div>
        </div>
    </div>

    <div class="message_up">
            <div class="message_data">
                <div class="color_pp_message">
                    <div class="white_pp_message">
                        <img src="{{asset('asset/Dummy_Profile_Picture.png')}}"/>
                    </div>
                    <div class="message_pp_online_status">
                        <div class="message_pp_online_green">

                        </div>
                    </div>
                </div>
                <h3>Messaging</h3>
                <div class="message_menu">
                    <img src="{{asset('asset/three-dot.png')}}"/>
                    <img src="{{asset('asset/edit_logo.png')}}"/>
                    <img src="{{asset('asset/down_menu.png')}}" id="menu_down"/>
                </div>
            </div>
            <div class="message_search_form">
                <form class="message_search_bar">
                    <img src="{{asset('asset/kaca_pembesar.png')}}"/>
                    <input type="text" placeholder="Search here"/>
                </form>
                <img src="{{asset('asset/sort_logo.png')}}"/>
            </div>

            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                        <div class="message_online_status">
                            <div class="message_online_green">

                            </div>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_chat">
                <div class="user_chat_data">
                    <div class="color_pp_user_chat">
                        <div class="white_user_chat">
                            <img src="{{asset('asset/linda_singh.png')}}"/>
                        </div>
                    </div>
                    <div class="user_chat_name">
                        <h3>Lindah Singh</h3>
                        <p>Yeah, Imma look it up. It seems kinda promising. Talk to you later!</p>
                    </div>
                </div>
                <div class="date_notif">
                    <h2>23 Feb</h2>
                    <div class="notif">
                        2
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/postactivity.js')}}"></script>
@endsection
