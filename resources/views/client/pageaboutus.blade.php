@extends('client.header-footer')
@section('content')

    <!-- shop first image -->

    <div class="shop_main_section">
        <section class="page-title centred brd-page">
            <div class="auto-container">
                <div class="content-box">
                    <h1>About us</h1>
                    <div class="contact_col_text">
                        <a href="acuasafe.html">Uaques</a> &nbsp;/&nbsp;About us
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- first section -->

    <div class="about_trusted_main_section">
        <div class="about_trusted_contanier">
            <div class="about_trusted_section wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;" ">
            <div class="about_trusted_section_row_one ">
                <h1>A Trusted Name In <br>Bottled Water Industry</h1>
            </div>
            <div class="about_trusted_section_row_two ">
                <div class="about_trusted_section_row_two_col ">
                    <div class="shape " style="background-image: url(client/assets/img/aboutwave.png); "></div>
                    <div class="about_trusted_section_img_block ">
                        <i class="fas fa-tint "></i>
                    </div>
                    <h4>Maxium Purity</h4>
                    <p>Due to the importance of water in our life<br> we give 99.99% pure water to our<br> customers.</p>
                    <div class="link ">
                        <a href="# " target="&quot;_blank&quot; " rel="&quot;nofollow&quot; ">Read More </a>
                    </div>
                </div>
                <div class="about_trusted_section_row_two_col ">
                    <div class="shape " style="background-image: url(client/assets/img/aboutwave.png); "></div>
                    <div class="about_trusted_section_img_block ">
                        <i class="fas fa-recycle "></i>
                    </div>
                    <h4>5 Steps Filtration</h4>
                    <p>Water has different types of impurity. 5 steps<br> filtration removes all the impurity of the<br> water.</p>
                    <div class="link ">
                        <a href="# " target="&quot;_blank&quot; " rel="&quot;nofollow&quot; ">Read More </a>
                    </div>
                </div>
                <div class="about_trusted_section_row_two_col ">
                    <div class="about_trusted_section_img_block ">
                        <i class="fas fa-tint-slash "></i>
                    </div>
                    <h4>Cholorine Free</h4>
                    <p>We serve our water chlorine free to think <br>about clients' lives since chlorine causes<br> serious damage to our health.</p>
                    <div class="link ">
                        <a href="# " target="&quot;_blank&quot; " rel="&quot;nofollow&quot; ">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- second section -->

    <div class="about_video_section ">
        <div class="about_auto_container ">
            <div class="about_upper_content ">
                <div id="video_block_one ">
                    <div class="video-inner wow fadeInLeft animated " data-wow-delay="0 " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft; ">
                        <div data-bg="https://smartdemowp.com/uaques/wp-content/uploads/2020/06/video-1.jpg " class="video-box rocket-lazyload entered lazyloaded " style="background-image: url(client/assets/img/aboutvideo.jpg); " data-ll-status="loaded ">
                        <div class="about_video-btn ">
                            <a href="https://youtu.be/nfP5N9Yc72A " class="lightbox-image " data-caption=" "><i class="fa-solid fa-play "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <!-- thirdsection -->

    <div class="about_deliver_main_section ">
         <div class="about_deliver_contanier ">
             <div class="about_deliver_section ">
                <div class="about_deliver_section_row_top ">
                    <div class="about_deliver_section_row_top_col_one ">
                        <div class="about_sec-title ">
                            <h1>Helping To Improve</h1>
                            </div>
                    </div>
                    <div class="about_deliver_section_row_top_col_two ">
                        <div class="about_text-inner ">
                            <div class="about_text ">
                                Another name for water is life. we want to help you to improve your water quality.So that you and your family can drink pure, healthy and safe water. We are trying our best to give you these services.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_deliver_section_row_bottom ">
                        <div class="auto_contanier ">
                            <div class="row clearfix ">
                        <div class="col-lg-4 col-md-6 col-sm-12 image-column ">
                        <figure class="image-box wow flipInY animated " data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY; ">
                            <img src="{{URL:: asset('client/assets/img/forth1.jpg')}}" alt=" ">
                        </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 image-column ">
                            <figure class="image-box wow flipInY animated " data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY; ">
                                <img src="{{URL:: asset('client/assets/img/forth2.jpg')}}" alt=" ">
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 image-column ">
                                <figure class="image-box wow flipInY animated " data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY; ">
                                    <img src="{{URL:: asset('client/assets/img/forth3.jpg')}}" alt=" ">
                                </figure>
                        </div>

                    </div>
                     </div>
                </div>
             </div>
         </div>
     </div>

@endsection
