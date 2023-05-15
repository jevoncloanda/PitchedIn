<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/forum.css')}}"/>
@extends('layouts.navbar')

@section('content')

    <div class="forum_page">
        <div class="forum_page_left">
            <div class="forum_page_left_content">
                <div class="forum_page_left_up">
                    <h1 class="discover">Discover your</h1>
                    <h1 class="opportunities">Opportunities.</h1>
                    <p>Create solutions to these problems, make it your business!</p>
                </div>

                <form class="forum_page_left_down" method="POST" action="{{route('createForum')}}">
                    @csrf
                    <h3>Got a problem in mind?</h3>
                    <div class="create_forum">
                        <div class="create_forum_profile">
                            <div class="create_forum_pp">
                                <div class="white_circle">
                                    <img src="{{asset('asset/Dummy_Profile_Picture.png')}}"/>
                                </div>
                            </div>
                            <div class="create_forum_name">
                                @if ($user)
                                    <h3 class="create_name">{{$user->fullname}}</h3>
                                    <h3 class="create_address">{{$user->state . ', ' . $user->country}}</h3>
                                @else
                                    <h3 class="create_name">Anonymous</h3>
                                @endif
                            </div>
                        </div>
                        <hr>

                        <textarea class="input_forum" placeholder="What problem are you saying?" id="input_forum" name="text"></textarea>


                        <hr>
                        <div class="create_forum_bottom">
                            <p class="numberOfChar">0/200</p>
                        </div>
                    </div>


                    <button type="submit">
                        Create Post
                    </button>
                </form>
            </div>
        </div>
        <div class="line">
            <div class="line_hr">

            </div>
        </div>
        <div class="forum_page_right">

            @foreach ($forums as $forum)
                <div class="postingan_user">
                    <div class="postingan_content">
                        <div class="profile_postingan_content">
                            @if ($forum->user_id)
                                <img src="{{asset('asset/anonymous.png')}}"/>
                                <h3>{{$forum->user->fullname}}</h3>
                            @else
                                <img src="{{asset('asset/anonymous.png')}}"/>
                                <h3>Anonymous</h3>
                            @endif
                        </div>
                        <hr>
                        <p>{{$forum->text}}</p>
                    </div>
                    <div class="like_dkk">
                        <img src="{{asset('asset/heart-noLike.png')}}" class="heart"/>
                        <img src="{{asset('asset/comment-logo.png')}}" class="comment"/>
                        <img src="{{asset('asset/save-logo.png')}}" class="save"/>
                    </div>
                </div>
            @endforeach

    <!--
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic commodi omnis nam nostrum optio provident dolore cum atque! Ratione explicabo est similique deserunt a optio soluta veniam. Obcaecati quibusdam qui eligendi officia harum temporibus commodi, alias quos, adipisci placeat aut ab! Magnam doloremque exercitationem aut soluta quae debitis animi excepturi amet eligendi, corrupti, voluptate tenetur est fugiat, eos sapiente. Repellat totam ducimus harum unde veritatis earum, consequuntur, quidem sint non repellendus cupiditate dignissimos facere accusantium, recusandae placeat nostrum quae. Reprehenderit in illum animi similique, quas autem eveniet qui sit eaque perferendis delectus ab deleniti nobis commodi vero minus, dolor suscipit, quibusdam adipisci? Dignissimos officiis provident corrupti culpa inventore quod laudantium recusandae, nisi ullam, voluptate, nulla sint? Quas nobis ratione omnis eum quibusdam explicabo debitis necessitatibus reprehenderit tempore a saepe dolore odit minus perspiciatis, eligendi fugit porro deleniti facilis recusandae? Velit itaque consectetur explicabo corrupti dicta placeat libero, possimus in sint impedit debitis neque rerum, eligendi delectus? Illo cum architecto iusto consequuntur exercitationem mollitia ex reiciendis culpa repellendus voluptatum itaque alias, quisquam maxime dignissimos saepe minus neque ea iste sint corrupti accusamus unde cumque! Quidem architecto reiciendis recusandae, fugiat consectetur dicta, ipsum eveniet itaque laborum minus, unde ex optio fuga similique?</p>
    </div>
    -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="{{asset('js/forum.js')}}"></script>
@endsection
