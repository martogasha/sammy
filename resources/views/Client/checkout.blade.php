@include('ClientPartial.header')


<!--=*=*=checkout area=*=*=*-->

<div class="check_out_login_area spt wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Have a coupon?<a href="#"> Click here to enter your code</a></span>
            </div>
        </div>
    </div>
</div>
<div class="check_out_page_area sp wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Billing Details</h2>
                <form class="check_out_fotm">
                    <div class="row">
                        <div class="col-sm-6">
                            <span>Fast Name*</span>
                            <input type="text">
                        </div>
                        <div class="col-sm-6">
                            <span>Last Name*</span>
                            <input type="text">
                        </div>
                        <div class="col-sm-12">
                            <span>Location*</span>
                            <input type="text">
                        </div>
                        <div class="col-sm-6">
                            <span>Email Address*</span>
                            <input type="text">
                        </div>
                        <div class="col-sm-6">
                            <span>Phone No*</span>
                            <input type="text">
                        </div>
                        <div class="col-sm-12">
                        </div>
                        <div class="col-sm-12">

                        </div>
                        <div class="col-sm-12">
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-12">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Additional Information</h2>
                <form class="order_note">
                    <span>Order Notes</span>
                    <textarea placeholder="Notes about your order."></textarea>
                </form>
                <div class="order_review">
                    <h2>Your order</h2>
                    <ul class="order_details">
                        <li class="order_header">Product<span>Total</span></li>
                        @foreach($checkouts as $checkout)
                        <li>{{$checkout->order_name}}<span>Ksh: {{$checkout->order_price}}</span></li>
                        @endforeach
                        <li class="total">Total<span>Ksh: {{$check}}</span></li>
                    </ul>
                </div>
                <form class="radio_check">
                    <div class="check_payment">
                        <input type="radio">
                        <span>Cash On Delivery</span>
                        <p>Scarcely on striking packages by so property in delicate Up or well myless rent read walk so be Easy sold at do hour sing spot.</p>
                    </div>
                    <div class="paypal">
                        <!--                            <input type="radio">-->
                        <p>Paypal <img src="img/paypal.png" alt=""><span> What is PayPal?</span></p>
                    </div>
                </form>
                <form action="{{url('checkoutStore')}}" id="placeOrder" method="post">
                    @csrf
                    <a class="cart_page_btn2" href="javascript:document.getElementById('placeOrder').submit();">Place  order</a>

                </form>
            </div>
        </div>
    </div>
</div>

<!--checkout area end-->



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
                    <p><i class="fa fa-copyright" aria-hidden="true"></i>
                        Copyright 2017 <a href="#">Crazycafe</a>,
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
<!-- === Nice select === -->
<script src="js/jquery.nice-select.min.js"></script>
<!-- === slick nav min === -->
<script src="js/jquery.slicknav.min.js"></script>
<!-- === wow min === -->
<script src="js/wow.min.js"></script>
<!-- === isotope min === -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- === active js === -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from tf.wpcheatsheet.net/html/cafe-duke/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:49:41 GMT -->
</html>
