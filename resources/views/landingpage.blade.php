<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Julius+Sans+One&family=Montserrat:wght@200;300;400;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/landingpage.css')}}"/>
@extends('layouts.navbar')

@section('content')

    <div class="landing_page_view_1">
        <form action="{{route('getRegisterPage')}}" method="GET">
            @csrf
        <div class="content_landing_page1">
            <h2 class="ready">Ready for Your</h2>
            <h2 class="future">Future?</h2>
            <p>New business ideas, professional tips, investor stories, and</p>
            <p>so much more!</p>
                <div class="grey_box_input">
                    <input type="email" placeholder="Enter your email" class="email_input" name="email"/>
                </div>
                <a class="btn_getStarted">
                    <button type="submit">
                        Get Started!
                    </button>
                </a>
            </div>
        </form>
        <div class="foot_landing_page1">
            <div class="foot_box2">
                <div class="count_foot_box1">
                    10.000+
                </div>
                <div class="foot_box_line">
                </div>
                <div class="investor_foot_box1">
                    <h3>Investors</h3>
                    <p>looking for</p>
                    <p>bright ideas</p>
                </div>
            </div>
            <div class="foot_box2">
                <div class="count_foot_box1">
                    300+
                </div>
                <div class="foot_box_line">
                </div>
                <div class="investor_foot_box1">
                    <h3>Tips</h3>
                    <p>for your business</p>
                    <p>improvements</p>
                </div>
            </div>
            <div class="foot_box2">
                <div class="count_foot_box1">
                    100+
                </div>
                <div class="foot_box_line">
                </div>
                <div class="investor_foot_box1">
                    <h3>Communities</h3>
                    <p>to expand your</p>
                    <p>network</p>
                </div>
            </div>
            <div class="foot_box2">
                <div class="count_foot_box1">
                    5000+
                </div>
                <div class="foot_box_line">
                </div>
                <div class="investor_foot_box1">
                    <h3>Problems</h3>
                    <p>to solve for your</p>
                    <p>inspirations</p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing_page_view_2">
        <div class="lp2_left">
            <div class="lp2_judul">
                <h1>Discover the</h1>
                <h1>Opportunities.</h1>
            </div>
            <div class="explore_content">
                <h1>Explore</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie ornare est. Nam quis posuere urna, et commodo nisl. Pellentesque pharetra dapibus nunc bibendum dignissim. Suspendisse porttitor elit et convallis scelerisque. Nullam in tincidunt nulla. Nullam ac laoreet enim, vitae cursus dui. </p>
            </div>
            <a href="{{route('getRegisterPage')}}">
                Get Started Now
            </a>
        </div>
        <div class="lp2_right">
            <div class="lp2_design_symbol">
                <div class="compas_white">
                    <img src="{{asset('asset/lp2_compas.png')}}"/>
                </div>
                <img src="{{asset('asset/plus_lp2.png')}}"/>
                <img src="{{asset('asset/chat_lp2.png')}}"/>
                <img src="{{asset('asset/people_lp2.png')}}"/>
                <img src="{{asset('asset/idea_lp2.png')}}"/>
            </div>

            <img src="{{asset('asset/picture_lp2.png')}}" class="lp2_right_content"/>
        </div>
    </div>

    <div class="landing_page_view_3_parent">
        <div class="landing_page_view_3">
            <div class="landing_page3_left">
                <div class="landing_page3_main">
                    <div class="landing_page3_main_content">
                        <h1>$ 1,000,000 +</h1>
                        <h2>Invested</h2>
                        <p>PitchedIn has successfuly helped thousands of entrepreneur
                            worldwide. We’re determined to help brilliant ideas get
                            realized. So, be the next one!</p>
                        <br>
                        <a href="{{route('getRegisterPage')}}">Join us now</a>
                        <div class="landing_page3_value">
                            <div class="value_section">
                                <img src="{{asset('asset/trusted.png')}}"/>
                                <p>Trusted</p>
                            </div>
                            <div class="value_section">
                                <img src="{{asset('asset/effective.png')}}"/>
                                <p>Effective</p>
                            </div>
                            <div class="value_section">
                                <img src="{{asset('asset/easyToUse.png')}}"/>
                                <p>Easy to Use</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="landing_page3_extraDesign1"></div>
                <div class="landing_page3_extraDesign2"></div>
                <div class="landing_page3_right">

                    <div class="landing_page3_frame">
                        <div class="left_btn_lp3">
                            <img src="{{asset('asset/left_lp3.png')}}"/>
                        </div>
                        <div class="landing_page3_pict_frame">
                            <div class="landing_page3_slider">
                                <div class="landing_page3_slide">
                                    <img src="{{asset('asset/invested.png')}}"/>
                                </div>
                                <div class="landing_page3_slide">
                                    <img src="{{asset('asset/invested_fix_2.png')}}">
                                </div>
                                <div class="landing_page3_slide">
                                    <img src="{{asset('asset/invested_fix_3.png')}}"/>
                                </div>
                                <div class="landing_page3_slide">
                                    <img src="{{asset('asset/invested_fix_4.png')}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="right_btn_lp3">
                            <img src="{{asset('asset/right_lp3.png')}}"/>
                        </div>
                    </div>
                    <p>FineNance - 2019 (Valued $2,5 billions as of 2023)</p>
                    <div class="lp3_group_dots">
                        <div class="lp3_dots">

                        </div>
                        <div class="lp3_dots">

                        </div>
                        <div class="lp3_dots">

                        </div>
                        <div class="lp3_dots">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="landing_page_view_4">
            <h1>How are their stories?</h1>
            <hr>
            <div class="lp4_investor_stories">
                <div class="lp4_investor_stories_slider">
                    <div class="lp4_investor_stories_slider1">
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                    </div>

               <div class="lp4_investor_stories_slider1">
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                    </div>

               <div class="lp4_investor_stories_slider1">
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lp4_investor_stories_slider1">
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lp4_investor_stories_slide">
                            <div class="lp4_customer_pp_container">
                                <div class="lp4_customer_pp">
                                    <img src="{{asset('asset/John_Doe.png')}}"/>
                                </div>
                            </div>
                            <div class="lp4_white_div_stories">
                                <div class="lp4_white_div_content">
                                    <h2>John Doe</h2>
                                    <h3>CEO of PineApple, inc.</h3>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tu eres el mejor portero del mundo.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lp4_group_dots">
                <div class="lp4_dots"></div>
                <div class="lp4_dots"></div>
                <div class="lp4_dots"></div>
                <div class="lp4_dots"></div>
            </div>
    </div>

    <div class="footer">
        <div class="footer_left">
            <div class="footer_features">
                <h3>Features</h3>
                <a>Explore</a>
                <a>Create</a>
                <a>Forum</a>
                <a>Community</a>
                <a>Tips</a>
            </div>
            <div class="footer_helpSupport">
                <h3>Help & Support</h3>
                <a>Contact Us</a>
                <a>Terms of Service</a>
                <a>Privacy Policy</a>
                <a>FAQ</a>
            </div>
            <div class="footer_followUs">
                <h3>Follow Us</h3>
                <a>Instagram</a>
                <a>Facebook</a>
                <a>Twitter</a>
            </div>
        </div>
        <div class="footer_white_line">
        </div>
        <div class="footer_right">
            <img src="{{asset('asset/logo_pitchedin.png')}}" class="logo_pitchedin_footer"/>
            <p>Managed By</p>
            <h1>CCNB</h1>
            <p>Copyright 2023 PitchedIn, All Rights Reserved</p>
        </div>
    </div>

    <script src="{{asset('js/landingpage.js')}}"></script>
@endsection
