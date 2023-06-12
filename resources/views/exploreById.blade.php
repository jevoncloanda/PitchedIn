<link rel="stylesheet" href="{{asset('css/explore.css')}}"/>
<link rel="stylesheet" href="{{asset('css/responsive/exploreById.css')}}"/>
@extends('layouts.navbar')
@section('content')
<div class="back">
    <div class="back_content">
        <a href="{{route('getBusinesses')}}">
            <img src="{{asset('asset/explore_back.png')}}" class="back_btn"/>
        </a>
    </div>
</div>

<div class="explore_page1">
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
                <h3>{{$business->user->fullname}}</h3>
                <p>{{$business->user->state . ', ' . $business->user->country}}</p>
            </div>
            <p>{{$business->user->bio}}</p>

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
    <div class="explore_right">
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
        <p>{{$business->caption}}<br></p>
        <br>
        @if ($business->image)
        <img src="{{url('storage/' . $business->image)}}" alt="" title=""/>
        @endif
        <br>
        <br>
        @if ($business->attachment)
        <a href="{{route('downloadAttachmentById', ['id' => $business->id])}}" class="bottom_content">
            <div class="pdf">
                <img src="{{asset('asset/logo-download-pdf.png')}}"/>
                <p>Attachment(s)</p>
            </div>
        </a>
        @endif
    </div>
</div>
<br/>
<br/>
<br/>

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

<script src="{{asset('js/explore.js')}}"></script>
@endsection
