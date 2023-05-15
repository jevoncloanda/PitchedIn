<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@extends('layouts.navbar')
@section('content')
<div class="sub-header-group">
    <a href="{{route('getCreateBusiness')}}"class="sub-header-pitch sub-header">Pitch</a>
    <a href="{{route('getCreateTips')}}"class="sub-header-tips sub-header-active">Tips</a>
</div>

<div class="tips-page" id="tips">
    <form class="pitch-create-post" action="{{route('createTips')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="pitch-fill-information">
            <div class="judul">
                <h2>Fill in these informations</h2>
                <p>Help investors to know your idea better</p>
            </div>


            <textarea id="txt-caption" class="input-caption" name="caption" maxlength="500" placeholder="Caption"></textarea>
            <textarea id="txt-tag" class="input-tag" name="tag" placeholder="Tag People"></textarea>
            <!--
            <input type="file" id="attachment" class="attachment-tips" placeholder="Drag or upload your attachment here" value=""
            accept=".pdf,.docx,.xlsx,.jpg,.jpeg,.png')}}" max="25000000"/>
            <label for="attachment" class="attachment-box-tips attachment-box">
                <img src="{{asset('asset/create-input_picture.png')}}"/>
                <div class="attachment-box-info">
                    <p><b>Drag</b> or <b>upload</b> your <b>attachments</b> here</p>
                    <p>Upload file in PDF, DOCX, XLSX, JPG, JPEG, or PNG format (Max 25Mb)</p>
                </div>
            </label>-->
            <input type="file" id="picture-general" name="image" class="logo-file-input" accept=".jpg,.jpeg,.png"/>
            <label for="picture-general" class="attachment-picture">
                <img src="{{asset('asset/create-picture.png')}}"/>
                <div class="attachment-box-info">
                    <p><b>Drag</b> or <b>upload</b> your <b>picture</b> here</p>
                    <p>Upload in file JPG, JPEG, or PNG Format (Max 25Mb)</p>
                </div>
            </label>
            <br/>
        </div>

        <div class="button-create-post">
            <button type="submit" class="button-create-post-btn">Create Post</button>
        </div>
    </form>
    <div class="tips-preview">
        <div class="preview-judul">
            Preview
        </div>
        <div class="tips-preview-content">
            <div class="tips-preview-content-header">
                <div class="tips-preview-content-header-profile">
                    <!--
                    <img src="{{asset('asset/steven.png')}}" class="profile-picture"/>
                    -->
                    <div class="profile-picture">
                        <img src="{{asset('asset/anonymous.png')}}"/>
                    </div>
                    <div class="tips-preview-content-header-profile-name">
                        <h3>{{$user->fullname}}</h3>
                        <br/>
                        <p>Posted..ago</p>
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
                    <div class="tips-preview-content-image-pict-frame">
                        <!--
                        <div class="slider-image-frame" >
                            <img src="{{asset('asset/banner-brando-windah.png')}}"/>
                        </div>
                        <div class="slider-image-frame" >
                            <img src="{{asset('asset/youtube-simulation.png')}}"/>
                        </div>
                        <div class="slider-image-frame" >
                            <img src="{{asset('asset/right-arrow.png')}}"/>
                        </div>
                        <div class="slider-image-frame" >
                            <img src="{{asset('asset/eclipse-signup.png')}}"/>
                        </div>
                        <div class="slider-image-frame">
                            <img src="{{asset('asset/login-pict.png')}}"/>
                        </div>
                        -->
                    </div>
                </div>

                <div class="btn_slider">
                    <img src="{{asset('asset/slider-right.png')}}" class="next"/>
                </div>

            </div>

            <div class="tips-preview-logo">
                <p class="preview-bottom-name">{{$user->fullname}}</p>
                <img src="{{asset('asset/heart-noLike.png')}}" id="heart-btn"/>
                <img src="{{asset('asset/comment-logo.png')}}"/>
                <img src="{{asset('asset/save-logo.png')}}" id="saved-logo"/>
            </div>

            <div class="tips-preview-content-bottom">

                <p class="preview-bottom-caption"></p>

                <p class="tags"></p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
<script src="{{asset('js/createTips.js')}}"></script>
@endsection
