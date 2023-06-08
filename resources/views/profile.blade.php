<link rel="stylesheet" href="{{asset('css/explore.css')}}">
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
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


    <div class="page-content">
        <div class="investor_profile">
            <div class="investor_profile_content">
                <div class="profile_investor">
                    <div class="pp_investor">
                        <div class="pp_white_circle">
                            <img src="{{asset('asset/Dummy_Profile_Picture.png')}}" class="pp_picture"/>
                        </div>
                    </div>
                    <div class="biodata_investor">
                        <div class="tag-investor">
                            <p>{{$profile->role}}</p>
                        </div>
                        <div class="data_investor">
                            <h3 class="data_investor_nama">{{$profile->fullname}}</h3>
                            <p class="data_investor_address">{{$profile->state . ', '. $profile->country}}</p>
                            <p class="data_investor_email">{{$profile->email}}</p>
                        </div>

                        <div class="quote_investor">
                            <p>{{$profile->bio}}</p>
                        </div>
                    </div>
                </div>

                <div class="connections-frame">
                    <div class="connections">
                        <div class="connection">
                            <h3>500+</h3>
                            <p>Connections</p>
                        </div>
                        <div class="line"></div>

                        <div class="posts">
                            <h3>73</h3>
                            <p>Posts</p>
                        </div>
                        <div class="line"></div>

                        <div class="deals">
                            <h3>4</h3>
                            <p>Deals</p>
                        </div>
                    </div>
                </div>


                <form class="about-me" method="POST" action="{{route('updateAbout', ['id' => $profile->id ])}}">
                    @csrf
                    @method('patch')
                    <div class="about-me_judul">
                        <h3>About Me</h3>
                        <button type="submit" class="edit-btn">
                            <img src="{{asset('asset/edit_logo.png')}}"/>
                            <h3>Edit</h3>
                        </button>
                    </div>
                    <hr/>
                    <div class="about-me_content">
                        <p>{{$profile->about}}</p>

                    </div>
                    <input type="text" name="about" class="about_me_content_rev"/>
                </form>

            </div>
            <div class="setting">
                <img src="{{asset('asset/settings.png')}}"/>
            </div>
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
        </div>
    </div>


    <div class="first_page">
        <div class="my_post">
            <div class="my_post_content">
                <div class="my_post_content_left">
                    <div class="post_content_judul">
                        <h2 >My Posts & Activities</h2>
                        <div class="edit_post">
                            <img src="{{asset('asset/remove.png')}}"/>
                            <h2>Edit</h2>
                        </div>
                    </div>
                    <hr class="garis_post">

                    <!--
                    <div class="post_judul">
                        <h2>FineNance</h2>
                        <h2>2019</h2>
                    </div>

                    <p class="post_content_p">FineNance is a money management tool that was published for android. I invested in this company
                        back in 2019, and it turned out to be one of my biggest investment. The company was only $15,000
                        worth, but now its net worth is $2,5 billions. Here are some of my involvements in the company:</p>

                    <ul>
                        <li>Invested $50,000 in the company</li>
                        <li>Helped the company to increase market reach by 300% within a year</li>
                        <li>Biggest stock holder in the company with 35% shares</li>
                    </ul>
                    -->
                    <div class="my_post_content_img">
                        <img src="{{asset('asset/sample_content_1.png')}}"/>
                        <img src="{{asset('asset/sample_content_2.png')}}"/>
                        <img src="{{asset('asset/sample_content_3.png')}}"/>

                    </div>


                    <div class="post_see_more">
                        <a href="{{route('getPostActivity', ['id' => $profile->id])}}">Click to see more</a>
                    </div>
                </div>
                <div class="my_post_content_right">
                    <a href="MyViewProfile.html">
                        <img src="{{asset('asset/right_vp2.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="my_post_blank">
                <!--Mungkin boleh coba bikin form bayangan disini-->
            </div>
        </div>
        <div class="my_experience">
            <div class="my_experience_content">
                <div class="my_experience_content_left">
                    <div class="experience_content_judul">
                        <h2 >My Experience</h2>
                        <div class="edit_experience">
                            <img src="{{asset('asset/remove.png')}}"/>
                            <h2>Edit</h2>
                        </div>
                    </div>
                    <hr class="garis_experience">

                    <div class="experience_judul">
                        <h2>FineNance</h2>
                        <h2>2019</h2>
                    </div>

                    <p class="experience_content_p">FineNance is a money management tool that was published for android. I invested in this company
                        back in 2019, and it turned out to be one of my biggest investment. The company was only $15,000
                        worth, but now its net worth is $2,5 billions. Here are some of my involvements in the company:</p>

                    <ul>
                        <li>Invested $50,000 in the company</li>
                        <li>Helped the company to increase market reach by 300% within a year</li>
                        <li>Biggest stock holder in the company with 35% shares</li>
                    </ul>

                </div>
                <div class="my_experience_content_right">
                    <!--Mungkin boleh coba bikin form bayangan disini-->
                </div>
            </div>
            <div class="my_experience_blank">

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

    <script src="{{asset('js/profile.js')}}"></script>
@endsection
