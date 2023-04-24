<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@extends('layouts.navbar')
@section('content')

    <div class="sub-header-group">
        <a href="{{route('getCreateBusiness')}}" class="sub-header-pitch sub-header-active">Pitch</a>
        <a href="{{route('getCreateTips')}}" class="sub-header-tips sub-header">Tips</a>
    </div>


    <div class="pitch-page" id="pitch">
        <form class="pitch-create-post" action="{{route('createBusiness')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pitch-fill-information">
                <div class="judul">
                    <h2>Fill in these informations</h2>
                    <p>Help investors to know your idea better</p>
                </div>

                <div class="fullname-div">
                    <input type="text" class="input-fullname" placeholder="Full Name" name="fullname"/>
                </div>

                <div class="businessproduct-div">
                    <input type="text" class="input-businessproduct" placeholder="Business/Product Name" name="business_name"/>
                </div>


                <div class="business-type">
                    <input type="text" class="first-category" placeholder="Business Type 1" name="type1"/>
                    <input type="text" class="second-category" placeholder="Business Type 2" name="type2"/>
                </div>

                <!--
                <textarea id="txt-generaldesc" class="input-generaldesc" name="generaldesc" maxlength="500" placeholder="General Description"></textarea>
                <div class="logo-group">
                    <input type="file" id="smile-general" class="logo-file-input"/>
                    <label for="smile-general">
                        <img src="{{asset('asset/create-smile.png')}}"/>
                    </label>
                    <label for="picture-general">
                        <img src="{{asset('asset/create-picture.png')}}"/>
                    </label>
                    <input type="file" id="video-general"  class="logo-file-input"/>
                    <label for="video-general">
                        <img src="{{asset('asset/create-video.png')}}"/>
                    </label>
                </div>
            -->


                <textarea id="txt-offerdetails" class="input-offerdetails" placeholder="Caption" name="caption"></textarea>


                <p id="errorMessage"></p>


                <input type="file" id="attachment" placeholder="Drag or upload your attachment here" value=""
                accept=".pdf,.docx,.xlsx,.jpg,.jpeg,.png" max="25000000" name="attachment"/>

                <label for="picture-general" class="attachment-picture">
                    <img src="{{asset('asset/create-picture.png')}}"/>
                    <div class="attachment-box-info">
                        <p><b>Drag</b> or <b>upload</b> your <b>picture</b> here</p>
                        <p>Upload in file JPG, JPEG, or PNG Format (Max 25Mb)</p>
                    </div>
                </label>
                <label for="attachment" class="attachment-box">
                    <img src="{{asset('asset/create-input_picture.png')}}"/>
                    <div class="attachment-box-info">
                        <p><b>Drag</b> or <b>upload</b> your <b>attachments</b> here</p>
                        <p>Upload file in PDF, DOCX, XLSX, JPG, JPEG, or PNG format (Max 25Mb)</p>
                    </div>
                </label>
                <input type="file" id="picture-general"  class="logo-file-input" accept=".jpg,.jpeg,.png" name="image"/>

            </div>

            <div class="button-create-post">
                <button type="submit" class="button-create-post-btn">Create Post</button>
            </div>
        </form>
        <div class="pitch-preview">
            <div class="preview-judul">
                Preview
            </div>
            <div class="pitch-preview-content">
                <div class="head-pitch-preview-content">
                    <div class="head-pitch-preview-content-judul">
                        <h2 class="head-pitch-preview-content-judul-h2-1"></h2>
                        <h2 class="head-pitch-preview-content-judul-h2-2"></h2>
                        <p>Posted..Ago</p>
                    </div>
                    <div class="head-pitch-preview-content-category">
                        <div class="first-category-container"></div>
                        <div class="second-category-container"></div>
                    </div>
                </div>
                <hr class="header-hr">
                <!--<div class="first-hr"></div>
                <hr class="first-hr">
                <hr class="header-hr">
                <p class="opening-content"></p>-->

                <!--<div class="third-hr">ddsfdsfdsf</div>

                <hr class="second-hr">
                <img src="{{asset('asset/banner-brando-windah.png')}}" class="banner-brando-windah"/>
                <p class="caption-title"></p>-->

                <div class="banner-div">

                </div>

                <!--
                <div class="banner">
                    <img src="{{asset('asset/close_banner.png')}}" class="close_banner"/>
                </div>-->
                <p class="caption-content"></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    {{-- <script src="{{asset('js/navbar.js')}}"></script> --}}
    <script src="{{asset('js/create.js')}}"></script>
@endsection


<!--
                <label for="attachment" class="attachment-box">
                    <img src="{{asset('asset/create-input_picture.png')}}"/>
                    <div class="attachment-box-info">
                        <p><b>Drag</b> or <b>upload</b> your <b>attachments</b> here</p>
                        <p>Upload file in PDF, DOCX, XLSX, JPG, JPEG, or PNG format (Max 25Mb)</p>
                    </div>
                </label>


                <label for="attachment" class="attachment-box-tips">
                    <img src="{{asset('asset/create-input_picture.png')}}"/>
                    <div class="attachment-box-info">
                        <p><b>Drag</b> or <b>upload</b> your <b>attachments</b> here</p>
                        <p>Upload file in PDF, DOCX, XLSX, JPG, JPEG, or PNG format (Max 25Mb)</p>
                    </div>
                </label>

-->
