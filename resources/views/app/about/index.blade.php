@extends('app.header')
@section('title', 'About')

@section('style')
    <style>

    </style>
@stop

@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>About <span>Us </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="index.html">Home</a><i>|</i></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile_ab_w3ls_info">
                <div class="col-md-6 ab_pic_w3ls">
                    <img src="images/giftss.jpeg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>About Our Gifts2Gives <span> Shop</span> </h5>
                    <p>Gifts2Gives is the number one gift experience digital platform in Thailand.</p>
                    <p>We offer a wide variety of Thai products bundle with a unique experience.</p>
                    <p>Give your  love ones a memorable experience with Gifts2Give</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="images/thai-souvenir1.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h1><span>S</span>ouvenir</h1>
                            <p></p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="images/13052.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h1><span>G</span>ifts</h1>
                            <p></p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- team -->
    {{-- <div class="banner_bottom_agile_info team">
        <div class="container">
            <h3 class="wthree_text_info">Our Team <span>Members</span></h3>
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t1.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Joanna Vilken</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t2.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Anika Mollik</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t3.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Megali Deo</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t4.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Retas Word</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team --> --}}

    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="images/mid.jpg" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3>Save up to <span>50%</span> in this week</h3>
                <p>Suspendisse varius turpis efficitur erat laoreet dapibus.
                    Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Customers</h4>
                    <h5 class="counter">653</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Events</h4>
                    <h5 class="counter">823</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Awards</h4>
                    <h5 class="counter">45</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //schedule-bottom -->
    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">What's <span>Trending</span></h3>

            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="women.html">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="images/bb1.jpg" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
                <div class="bb-middle-agileits-w3layouts grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom3.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 55%</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="bb-middle-agileits-w3layouts forth grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom4.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 65%</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/grids-->
    <div class="agile_last_double_sectionw3ls">
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="womens.html"><img src="images/bot_1.jpg" alt=" ">
                <h4>Flat <span>50%</span> offer</h4>
            </a>

        </div>
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="womens.html"><img src="images/bot_2.jpg" alt=" ">
                <h4>Flat <span>50%</span> offer</h4>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--/grids-->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
        </div>
    </div>
    <!-- //we-offer -->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--grids-->
@stop


@section('script')
    <script>
        $(document).ready(function() {

        });

    </script>
@stop
