<link rel="stylesheet" href="{{asset('css/tips.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@extends('layouts.navbar')
@section('content')
    <div class="page_tips">
        <div class="page_tips_left">
            <div class="page_tips_left_space">

            </div>
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
                        <h3>{{$auth->fullname}}</h3>
                        <p>{{$auth->state . ', ' . $auth->country}}</p>
                    </div>
                    <p>{{$auth->bio}}</p>

                    <div class="connect_and_chat">
                        <div class="connect">
                            View Profile
                        </div>
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
        </div>

        <div class="tips_main">
            <form class="search_area" action="{{route('searchTips')}}" >
                <div class="search_bar">
                    <img src="{{asset('asset/recent_logo.png')}}"/>
                    <input name="query" type="text" placeholder="Search here" class="input_search"/>
                </div>
            </form>
            @foreach ($sorted_tips as $tip)
            <div class="tips-preview-content">
                <div class="tips-preview-content-header">
                    <div class="tips-preview-content-header-profile">
                        <div class="profile-picture">
                            <img src="{{asset('asset/anonymous.png')}}"/>
                        </div>
                        <div class="tips-preview-content-header-profile-name">
                            <h3>{{$tip->user->fullname}}</h3>
                            <br/>
                            <?php
                                $post_time = now()->diffInHours($tip->created_at);
                            $post_time_str = $post_time . ' hours';
                            if($post_time == 0)
                            {
                                $post_time = now()->diffInMinutes($tip->created_at);
                                $post_time_str = $post_time . ' minutes';
                            }
                            if($post_time == 0)
                            {
                                $post_time = now()->diffInSeconds($tip->created_at);
                                $post_time_str = $post_time . ' seconds';
                            }
                            ?>
                            <p>Posted {{$post_time_str}} ago</p>
                        </div>
                    </div>
                    <div class="tips-preview-content-header-menu">
                        <img src="{{asset('asset/three-dot.png')}}"/>
                    </div>
                </div>

                <div class="tips-preview-content-image">

                    <div class="btn_slider">
                        <img src="{{asset('asset/slider-left.png')}}" class="prev"/>
                    </div>
                    <div class="tips-preview-content-image-pict">
                        @if ($tip->image)
                        <div class="tips-preview-content-image-pict-frame">
                            <div class="slider-image-frame" >
                                <img src="{{url('storage/' . $tip->image)}}" alt="" title=""/>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="btn_slider">
                        <img src="{{asset('asset/slider-right.png')}}" class="next"/>
                    </div>

                </div>

                <div class="tips-preview-logo">
                    <img src="{{asset('asset/heart-noLike.png')}}" class="heart-btn"/>
                    <img src="{{asset('asset/comment-logo.png')}}"/>
                    <img src="{{asset('asset/save-logo.png')}}" class="saved-logo"/>
                </div>

                <div class="tips-preview-content-bottom">
                    <p class="preview-bottom-name">{{$tip->user->fullname}}</p>


                    <div class="preview-content-bottom-caption">
                        <p class="main-content">{{$tip->caption}}</p>
                        <p class="read_more">...read more</p>
                    </div>


                    <p class="tags">{{$tip->tag}}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="explore_page2_right">
            <div class="suggestions_box">
                <div class="suggestions">
                    Suggestions
                </div>
            </div>
            <div class="user_reccomendations">
                @foreach ($users as $user)
            <div class="reccomendation">
                <div class="color_circle_pp">
                    <div class="white_circle_pp">
                        <img src="{{asset('asset/anonymous.png')}}"/>
                    </div>
                </div>
                <div class="reccomendation_data">
                    <div class="reccomendation_name">
                        <h2>{{$user->fullname}}</h2>
                        <p>{{$user->state . ', ' . $user->country}}</p>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="connect_and_chat">
                        <div class="connect">
                            Connect
                        </div>
                        <img src="{{asset('asset/chat_logo.png')}}"/>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <hr>
            @endforeach
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
    <script src="{{asset('js/tips.js')}}"></script>
@endsection
