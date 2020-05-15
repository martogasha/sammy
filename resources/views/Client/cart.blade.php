@include('ClientPartial.header')
@include('flash-message')

<!--=*=*==Single cart page area=*=*=*-->

<div class="cart_page_area sp wow fadeIn">
    <div class="container">
        <div class="cart_table_wraper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart_wrpaer">
                        <table class="table table-striped table-responsive">
                            <thead>
                            <tr>
                                <th> </th>
                                <th><span></span></th>
                                <th><span class="cart_padding35">Product</span></th>
                                <th><span class="cart_padding35">Price</span></th>
                                <th class="text-center"><span>Total</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)
                            <tr>
                                <form action="{{url('deleteCart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="cartId" value="{{$cart->id}}">
                                    <th scope="row"><button type="submit" class="btn btn-secondary">Delete</button></th>

                                </form>
                                <td class="product_img text-center"><img src="{{asset('uploads/cafe/'.$cart->image)}}" alt=""></td>
                                <td class="item_name cart_padding35">{{$cart->order_name}}</td>
                                <td class="cart_padding35">Ksh: {{$cart->order_price}}</td>
                                <td  class="text-center">Ksh: {{$cart->order_price}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-6">
                                <a class="cart_page_btn1" href="#">Coupon Code</a>
                                <a class="cart_page_btn2" href="#">Apply coupon</a>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a class="cart_page_btn2" href="{{url('shop')}}">Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart_details_area spb">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <div class="total_cart">
                    <h2>Cart Totals</h2>
                    <ul>
                        <li>Total<span class="total">Ksh: {{$cartPrice}}</span></li>
                    </ul>
                        <a href="{{url('checkout')}}">Proceed to Checkout</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!--single_cart page area end-->



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


<!-- Mirrored from tf.wpcheatsheet.net/html/cafe-duke/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:47:46 GMT -->
</html>
