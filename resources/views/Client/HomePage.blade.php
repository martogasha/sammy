@include('ClientPartial.header')
@include('flash-message')
    <!--header area end-->

    <!--welcome area Start-->
    <div class="welcome_area">
        <div class="welcome_slider">
            <div class="single_welcome_slider" style="background-image:url(img/welcome_bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-8">
                            <div class="welcome_content">
                                <span>Wellcome to Cafe duke</span>
                                <h1>FOOD TASTES BETTER WHEN YOU EAT IT WITH YOUR FAMILY.</h1>
                                <a href="about.html" class="custom_btn">BOOK A TABLE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_welcome_slider" style="background-image:url(img/welcome_bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-8">
                            <div class="welcome_content">
                                <span>Welcome to Cafe duke</span>
                                <h1>FOOD TASTES BETTER WHEN YOU EAT IT WITH YOUR FAMILY.</h1>
                                <a href="about.html" class="custom_btn">BOOK A TABLE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_welcome_slider" style="background-image:url(img/welcome_bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-8">
                            <div class="welcome_content">
                                <span>Welcome to Cafe duke</span>
                                <h1>FOOD TASTES BETTER WHEN YOU EAT IT WITH YOUR FAMILY.</h1>
                                <a href="about.html" class="custom_btn">BOOK A TABLE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome area end-->
</div>
<!--Hero area end-->


<!--special_food area start-->
<div class="special_food_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_tittle">
                    <i class="icon" style="background-image:url(img/tittle_icon.png)"></i>
                    <div class="section_tittle_content">
                        <h1>CAFE DUKE AVAILABLE FOOD</h1>
                        <span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="special_food_slider">
                    @foreach($products as $product)
                    <div class="singl_special_slider wow fadeIn" data-wow-delay="0">
                        <img src="{{asset('uploads/cafe/'. $product->image)}}" alt="">
                        <div class="special_content">
                            <h4>{{$product->name}}</h4>
                            <p>{{$product->desc}}</p>
                            <span>Ksh: {{$product->price}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{url('shop')}}"> <button class="btn btn-block">View More</button></a>
            </div>
        </div>
    </div>
</div>
<!--special_food area end-->

<!--booking area start-->
<div class="booking_area parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_tittle">
                    <i class="icon" style="background-image:url(img/tittle_icon.png)"></i>
                    <div class="section_tittle_content">
                        <h1>BOOKING TABEL</h1>
                        <span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</span>
                    </div>
                </div>
            </div>
        </div>
        <form action="#" class="booking_form wow fadeIn">
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" placeholder="Name">
                </div>
                <div class="col-sm-4">
                    <input type="email" placeholder="Email">
                </div>
                <div class="col-sm-4">
                    <input type="text" placeholder="Occation">
                </div>
                <div class="col-sm-4">
                    <input type="text" placeholder="Phone">
                </div>
                <div class="col-sm-4">
                    <input type="text" placeholder="DD-MM-YY">
                </div>
                <div class="col-sm-4">
                    <input type="text" placeholder="Parson">
                </div>
                <div class="col-sm-12">
                    <textarea placeholder="Message.."></textarea>
                </div>
                <div class="col-sm-12">
                    <a href="#" class="custom_btn">SUBMIT</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!--booking area end-->

<!--testimonial area start-->
<div class="testimonial_area parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="testimonial_slider">
                    <div class="single_testimonial_slider">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis .</p>
                        <span class="client_name">
                                Mashok khan
                            </span>
                    </div>
                    <div class="single_testimonial_slider">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis .</p>
                        <span class="client_name">
                                Ashraf Uddin
                            </span>
                    </div>
                    <div class="single_testimonial_slider">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis .</p>
                        <span class="client_name">
                                Rubel khan
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial area end-->

<!--footer area start-->
<footer>
    <div class="footer_top_area">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-sm-3">
                    <h4 class="footer_tittle">About us</h4>
                    <div class="footer_content">
                        <p>Duis autem vel eum iriure dolor in hendreri vulputate velit esse mole stie consequat liber tempor.</p>
                        <span>We Accept</span>
                        <img src="img/payment_method1.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-3 margin_left">
                    <h4 class="footer_tittle">Important link</h4>
                    <ul class="footer_menu">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="food_menu.html">Menu</a></li>
                        <li><a href="blog1.html">News</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4 class="footer_tittle">Contact</h4>
                    <div class="footer_contact">
                        <span>Head office</span>
                        <a><i class="fa fa-map-marker" aria-hidden="true"></i>2923 White Pine Lane
                            Ashburn, VA 20147</a>
                        <a href="tel:+880356504521"><i class="fa fa-phone" aria-hidden="true"></i>
                            +88 035 650 4521</a>
                        <a href="mailto:Suuportfood@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            Suuportfood@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="footer_tittle">Subcribe now!!</h4>
                    <form action="#" class="footer_subscribe">
                        <input type="text" placeholder="Type your mail addriss">
                        <a href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2017 <a href="#">Crazycafe</a>,
                        <br> All Rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->


<!-- === jqyery === -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- === bootsrap-min === -->
<script src="js/bootstrap.min.js"></script>
<!-- === owl carousel-min === -->
<script src="js/owl.carousel.min.js"></script>
<!-- === slick nav min === -->
<script src="js/jquery.slicknav.min.js"></script>
<!-- === wow min === -->
<script src="js/wow.min.js"></script>
<!-- === isotope min === -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- === active js === -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from tf.wpcheatsheet.net/html/cafe-duke/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:45:35 GMT -->
</html>
