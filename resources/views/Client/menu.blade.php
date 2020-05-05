@include('ClientPartial.header')

<!--shop page area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-push-4">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-sm-6">
                        <div class="single_shop">
                            <img src="{{asset('uploads/cafe/'. $product->image)}}" alt="">
                            <div class="shop_content">
                                <h4>{{$product->name}}</h4>
                                <p>{{$product->desc}}</p>
                                <div class="shop_rate">
                                    <span>Ksh: {{$product->price}}</span>
                                    <form action="{{route('cart.store')}}" id="cartForm" method="post">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$product->id}}">
                                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        <a class="blog_btn" href="javascript:document.getElementById('cartForm').submit();">Order now</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="paginations">
                    <a class="prev" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a class="next active" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-sm-pull-8">
                <form class="blog_search_bar">
                    <input type="text" placeholder="Search here">
                    <a href="#" class="search_btn"><i class="fa fa-search" aria-hidden="true"></i> </a>
                </form>
                <ul class="shop_list">
                    <li><a href="#">BRACKFAST</a></li>
                    <li><a href="#">PIZZA</a></li>
                    <li><a href="#">LUNCH</a></li>
                    <li><a href="#">DINNER</a></li>
                    <li><a href="#">SOUP</a></li>
                    <li><a href="#">DINNER</a></li>
                    <li><a href="#">OTHERS</a></li>
                </ul>
                <div class="shop_rating">
                    <h5>RATING</h5>
                    <ul class="shop_list rating">
                        <li>
                            <a href="#">
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="rated fa fa-star-o"></i>
                                <i class="rated fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="rated fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                                <i class=" fa fa-star-o"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop page area end-->



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
<!-- === Slick  === -->
<script src="js/slick.min.js"></script>
<!-- === active js === -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from tf.wpcheatsheet.net/html/cafe-duke/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:49:35 GMT -->
</html>
