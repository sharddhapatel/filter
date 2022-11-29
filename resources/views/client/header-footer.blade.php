<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{URL:: asset('client/assets/css/acuasafe.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('client/assets/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('client/assets/fontawesome/css/card.css')}}">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!--header section -->
    <header class="acuasafe_main_header">
        <div class="contanier">
            <div class="acuasafe_header">
                <div class="acuasafe_header_row">
                    <div class="acuasafe_header_row_col_one">
                        <div class="acuasafe_header_row_img_block">
                            <img src="{{URL:: asset('client/assets/img/logo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="acuasafe_header_row_col_two">
                        <ul id="menu-primary" class="menu">
                            <li class="menu-item">
                                <a href="{{url('/')}}" class="animsition-link active">Home</a><i class="fas fa-chevron-down active"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="acuasafe.html" class="animsition-link">Home Page 01</a></li>
                                    <li class=""><a href="#" class="animsition-link">Home Page 02</a></li>
                                    <li class=""><a href="#" class="animsition-link">Home Page 03</a></li>
                                    <li class=""><a href="#" class="animsition-link">One Page Home</a></li>
                                    <li class=""><a href="#" class="animsition-link">RTL Home</a></li>
                                    <li class=""><a href="#" class="animsition-link">Header Style</a></li>
                                    <li class=""><a href="#" class="animsition-link">Header Style 01</a></li>
                                    <li class=""><a href="#" class="animsition-link">Header Style 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('pageaboutus')}}" class="animsition-link">Pages</a><i class="fas fa-chevron-down"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="pageaboutus.html" class="animsition-link">About Us</a></li>
                                    <li class=""><a href="#" class="animsition-link">Our Team</a></li>
                                    <li class=""><a href="#" class="animsition-link">Testimonials</a></li>
                                    <li class=""><a href="#" class="animsition-link">Faq's</a></li>
                                    <li class=""><a href="#" class="animsition-link">Gallery One</a></li>
                                    <li class=""><a href="#" class="animsition-link">Gallery Two</a></li>
                                    <li class=""><a href="#" class="animsition-link">404</a></li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('service')}}" class="animsition-link">Services</a><i class="fas fa-chevron-down"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="service.html" class="animsition-link">Our Services</a></li>
                                    <li class=""><a href="#" class="animsition-link">Project Planning</a></li>
                                    <li class=""><a href="#" class="animsition-link">Residential Waters</a></li>
                                    <li class=""><a href="#" class="animsition-link">Commercial Waters</a></li>
                                    <li class=""><a href="#" class="animsition-link">Filtration Plants</a></li>
                                    <li class=""><a href="#" class="animsition-link">Water Softening</a></li>
                                    <li class=""><a href="#" class="animsition-link">Market Research</a></li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('shop')}}" class="animsition-link">Shop</a><i class="fas fa-chevron-down"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="#" class="animsition-link">Shop</a></li>
                                    <li class=""><a href="#" class="animsition-link">Shop Details</a></li>
                                    <li class=""><a href="#" class="animsition-link">Cart</a></li>
                                    <li class=""><a href="#" class="animsition-link">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('element')}}" class="animsition-link">Elements</a><i class="fas fa-chevron-down"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="element.html" class="animsition-link">Feature Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Feature Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Info Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Counter Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Filtration Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Our Mission Layout</a></li>
                                    <li class=""><a href="#" class="animsition-link">Service Layout 01</a></li>
                                    <li class=""><a href="#" class="animsition-link">Service Layout 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/')}}" class="animsition-link">Blog</a><i class="fas fa-chevron-down"></i>
                                <ul class="sub-menu">
                                    <li class=""><a href="blogclassic.html" class="animsition-link">Blog Grid</a></li>
                                    <li class=""><a href="#" class="animsition-link">Blog Standard</a></li>
                                    <li class=""><a href="#" class="animsition-link">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('contact')}}" class="animsition-link">contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('card')}}" class="animsition-link">Add to Card</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('logout')}}" class="animsition-link">logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="acuasafe_header_row_col_three">
                        <div class="acuasafe_header_row_col_three_search">
                            <a href=""><i class="fas fa-search"></i></a>
                        </div>
                        <?php $user_id = Session::get('user_id'); ?>
                        @if(count((array) Session('cart'.$user_id))== 0)
                        <span class="cart-qty"></span>
                        @else
                        <span class="cart-qty">{{ count((array) Session('cart'.$user_id)) }}</span>
                        @endif
                        <div class="acuasafe_header_row_col_three_cart">
                            <a href=""><i class="fas fa-shopping-cart"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
    @yield('content')

    <!-- footer section -->

    <div class="footer_main_section ">
        <div class="pattern-layer">
            <div class="pattern-3" style="background-image: url(client/assets/img/patternshap.png);"></div>
        </div>
        <div class="border-shap ">
            <div data-bg="https://smartdemowp.com/uaques/wp-content/themes/uaques/assets/images//icons/border-4.png " class="border-3 rocket-lazyload entered lazyloaded " style="background-image: url(client/assets/img/footerimage.png); " data-ll-status="loaded "></div>
        </div>
        <div class="footer_contanier ">
            <div class="footer_section ">
                <div class="footer_section_row_top ">
                    <div class="footer_section_row_col_one ">
                        <form action="# " method="post ">
                            <div class="form-group ">
                                <input name="email " required=" " type="email1 " placeholder="Email Address ">
                                <button class="theme-btn style-two " type="submit ">subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer_section_row_col_two ">
                        <div class="footer-social pull-right ">
                            <ul class="social-links clearfix ">
                                <li><a href="# "><i class="fa-brands fa-twitter "></i></a></li>
                                <li><a href="# "><i class="fa-brands fa-facebook-f "></i></a></li>
                                <li><a href="# "><i class="fa-brands fa-google-plus-g "></i></a></li>
                                <li><a href="# "><i class="fa-brands fa-youtube "></i></a></li>
                                <li><a href="# "><i class="fa-brands fa-pinterest-p "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="footer_section_row_bottom wow fadeInUp animated " data-wow-delay="300ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp; ">

                    <div class="footer_section_row_bottom_col_one ">
                        <div class="logo-widget footer-widget ">
                            <figure class="footer-logo ">
                                <a href="https://smartdemowp.com/uaques/ ">
                                    <img class="alignnone size-full wp-image-548 entered lazyloaded " src="http://smartdemowp.com/uaques/wp-content/uploads/2020/06/footer-logo1.png" alt=" " width="215 " height="52 " data-lazy-src="http://smartdemowp.com/uaques/wp-content/uploads/2020/06/footer-logo1.png
                " data-ll-status="loaded "><noscript>
                                        <img class="alignnone size-full wp-image-548 " src="http://smartdemowp.com/uaques/wp-content/uploads/2020/06/footer-logo1.png" alt=" " width="215 " height="52 " /></noscript>
                                </a>
                            </figure>
                            <div class="text ">
                                <p>Uaques Drinking water gives five steps of water purification. Promising quality and ensuring the latest technology and serving the water with labelled bottles with trust and honesty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer_section_row_bottom_col_two ">
                        <div class="links-widget footer-widget ">
                            <h3 class="widget-title ">About Us</h3>
                            <div class="widget-content ">
                                <ul class="list clearfix ">
                                    <li><a href="# ">Why Choose Us</a></li>
                                    <li><a href="# ">Free Water Bottles</a></li>
                                    <li><a href="# ">Water Dispensers</a></li>
                                    <li><a href="# ">Bottled Water Coolers</a></li>
                                    <li><a href="# ">Contact us</a></li>
                                    <li><a href="# ">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_section_row_bottom_col_three ">
                        <div class="shediul-widget footer-widget ">
                            <h3 class="widget-title ">Business Hours</h3>
                            <div class="widget-content ">
                                <ul class="list clearfix ">
                                    <li>Monday-Friday: 9am to 5pm</li>
                                    <li>Saturday: 10am to 4pm</li>
                                    <li>Sunday: Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_section_row_bottom_col_four ">
                        <div class="contact-widget footer-widget ">
                            <h3 class="widget-title ">Contact us</h3>
                            <div class="widget-content ">
                                <ul class="list clearfix ">
                                    <li>3065 Upton Avenue, Guilford<br> Maine 04443 USA</li>
                                    <li>Call Us <a href="tel:12078761059 ">+1 207-876-1059</a></li>
                                    <li>E-mail: <a href="mailto:info@example.com ">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom footer -->
    <div class="footer-bottom ">
        <div class="auto-container ">
            <div class="copyright ">
                Copyrights © 2020 <a href="# ">Uaques</a> Template. All rights reserved. </div>
        </div>
    </div>
    <!------ owl slider link---------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js "></script>
    <script src="{{URL:: asset('client/assets/js/acuasafe.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("active ");
                $(this).addClass("active ");
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
