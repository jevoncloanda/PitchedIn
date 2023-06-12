<link rel="stylesheet" href="{{asset('css/explore.css')}}"/>
<link rel="stylesheet" href="{{asset('css/responsive/explore.css')}}"/>
@extends('layouts.navbar')
@section('content')
<div class="explore_page2">
    <div class="explore_page2_left">
        <form class="search_bar" action="{{route('searchBusinesses')}}">
            <!--
            <img src="{{asset('asset/kaca_pembesar.png')}}"/>
            <input type="text" placeholder="Search here"/>
            -->
            <div class="search_bar_inside">
                <img src="{{asset('asset/kaca_pembesar.png')}}"/>
                <input name="query" type="text" placeholder="Search here"/>
            </div>
        </form>
        @foreach ($sorted_biz as $business)
        <div class="postingan_explore2">
            <div class="color_circle_pp">
                <div class="white_circle_pp">
                    <img src="{{asset('asset/anonymous.png')}}"/>
                </div>
                <div class="online_status">
                    <div class="online_green">

                    </div>
                </div>
            </div>
            <div class="postingan_explore2_content">
                <div class="explore_right_head">
                    <div class="explore_head_data">
                        <h2>{{$business->fullname}}</h2>
                        <h3>{{$business->business_name}}</h3>
                        <?php
                            $post_time = now()->diffInDays($business->created_at);
                            $post_time_str = $post_time . ' days';
                            if($post_time == 0)
                            {
                                $post_time = now()->diffInHours($business->created_at);
                                $post_time_str = $post_time . ' hours';
                            }
                            if($post_time == 0)
                            {
                                $post_time = now()->diffInMinutes($business->created_at);
                                $post_time_str = $post_time . ' minutes';
                            }
                            if($post_time == 0)
                            {
                                $post_time = now()->diffInSeconds($business->created_at);
                                $post_time_str = $post_time . ' seconds';
                            }
                        ?>
                        <p>Posted <b>{{$post_time_str}}</b> ago</p>
                    </div>
                    <div class="explore_head_tag">
                        <div class="first_tag">
                            {{$business->type1}}
                        </div>
                        <div class="second_tag">
                            {{$business->type2}}
                        </div>
                    </div>
                </div>
                <hr>
                <p>{{$business->caption}}</p>
                @if ($business->image)
                <img src="{{url('storage/' . $business->image)}}" alt="" title=""/>
                @endif
                <div class="see_more">
                    <a href="{{route('getBusinessById', ['id' => $business->id])}}">See More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="explore_page2_right">
        <div class="suggestions">
            Suggestions
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
                <img src="{{asset('asset/three-dot.png')}}" id="menu_three"/>
                <img src="{{asset('asset/edit_logo.png')}}" id="menu_edit"/>
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
                <img src="{{asset('asset/three-dot.png')}}" id="menu_three"/>
                <img src="{{asset('asset/edit_logo.png')}}" id="menu_edit"/>
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

<script src="{{asset('js/explore.js')}}"></script>
@endsection
