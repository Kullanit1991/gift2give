@extends('app.header')
@section('title', 'Home')

@section('style')
<link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
    section {
        padding: 60px 0;
        min-height: 100vh;
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .bg-gray {
        background-color: #f9f9f9;
    }

    .site-heading h2 {
        display: block;
        font-weight: 700;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .site-heading h2 span {
        color: #2fdab8;
    }

    .site-heading h4 {
        display: inline-block;
        padding-bottom: 20px;
        position: relative;
        text-transform: capitalize;
        z-index: 1;
    }

    .site-heading h4::before {
        background: #2fdab8 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 2px;
        left: 50%;
        margin-left: -25px;
        position: absolute;
        width: 50px;
    }

    .site-heading {
        margin-bottom: 60px;
        overflow: hidden;
        margin-top: -5px;
    }

    .carousel-shadow .owl-stage-outer {
        margin: -15px -15px 0;
        padding: 15px;
    }

    .we-offer-area .our-offer-carousel .owl-dots .owl-dot span {
        background: #ffffff none repeat scroll 0 0;
        border: 2px solid;
        height: 15px;
        margin: 0 5px;
        width: 15px;
    }

    .we-offer-area .our-offer-carousel .owl-dots .owl-dot.active span {
        background: #2fdab8 none repeat scroll 0 0;
        border-color: #2fdab8;
    }

    .we-offer-area .item {
        background: #ffffff none repeat scroll 0 0;
        border-left: 2px solid #2fdab8;
        -moz-box-shadow: 0 0 10px #cccccc;
        -webkit-box-shadow: 0 0 10px #cccccc;
        -o-box-shadow: 0 0 10px #cccccc;
        box-shadow: 0 0 10px #cccccc;
        overflow: hidden;
        padding: 30px;
        position: relative;
        z-index: 1;
    }

    .we-offer-area.text-center .item {
        background: #ffffff none repeat scroll 0 0;
        border: medium none;
        padding: 67px 40px 64px;
    }

    .we-offer-area.text-center .item i {
        background: #2fdab8 none repeat scroll 0 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        color: #ffffff;
        font-size: 40px;
        height: 80px;
        line-height: 80px;
        position: relative;
        text-align: center;
        width: 80px;
        z-index: 1;
        transition: all 0.35s ease-in-out;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        margin-bottom: 25px;
    }

    .we-offer-area.text-center .item i::after {
        border: 2px solid #FB3F4E;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        content: "";
        height: 90px;
        left: -5px;
        position: absolute;
        top: -5px;
        width: 90px;
        z-index: -1;
        transition: all 0.35s ease-in-out;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
    }

    .we-offer-area.item-border-less .item {
        border: medium none;
    }

    .we-offer-area .our-offer-items.less-carousel .equal-height {
        margin-bottom: 30px;
    }

    .we-offer-area.item-border-less .item .number {
        font-family: "Poppins", sans-serif;
        font-size: 50px;
        font-weight: 900;
        opacity: 0.1;
        position: absolute;
        right: 30px;
        top: 30px;
    }

    .our-offer-carousel.center-active .owl-item:nth-child(2n) .item,
    .we-offer-area.center-active .single-item:nth-child(2n) .item {
        background: #2fdab8 none repeat scroll 0 0;
    }

    .our-offer-carousel.center-active .owl-item:nth-child(2n) .item i,
    .our-offer-carousel.center-active .owl-item:nth-child(2n) .item h4,
    .our-offer-carousel.center-active .owl-item:nth-child(2n) .item p,
    .we-offer-area.center-active .single-item:nth-child(2n) .item i,
    .we-offer-area.center-active .single-item:nth-child(2n) .item h4,
    .we-offer-area.center-active .single-item:nth-child(2n) .item p {
        color: #ffffff;
    }

    .we-offer-area .item i {
        color: #2fdab8;
        display: inline-block;
        font-size: 60px;
        margin-bottom: 20px;
    }

    .we-offer-area .item h4 {
        font-weight: 600;
        text-transform: capitalize;
    }

    .we-offer-area .item p {
        margin: 0;
    }

    .we-offer-area .item i,
    .we-offer-area .item h4,
    .we-offer-area .item p {
        transition: all 0.35s ease-in-out;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
    }

    .we-offer-area .item::after {
        background: #2fdab8 none repeat scroll 0 0;
        content: "";
        height: 100%;
        left: -100%;
        position: absolute;
        top: 0;
        transition: all 0.35s ease-in-out;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        width: 100%;
        z-index: -1;
    }

    .we-offer-area .item:hover::after {
        left: 0;
    }

    .we-offer-area .item:hover i,
    .we-offer-area .item:hover h4,
    .we-offer-area .item:hover p {
        color: #ffffff !important;
    }

    .we-offer-area.text-center .item:hover i::after {
        border-color: #ffffff !important;
    }

    .we-offer-area.text-center .item:hover i {
        background-color: #ffffff !important;
        color: #2fdab8 !important;
    }

    .we-offer-area.text-left .item i {
        background: #2fdab8 none repeat scroll 0 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        color: #ffffff;
        display: inline-block;
        font-size: 60px;
        height: 100px;
        line-height: 100px;
        margin-bottom: 30px;
        position: relative;
        width: 100px;
        z-index: 1;
        text-align: center;
    }

    .we-offer-area.text-left .item i::after {
        border: 2px solid #2fdab8;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        content: "";
        height: 120px;
        left: -10px;
        position: absolute;
        top: -10px;
        width: 120px;
    }
</style>


@stop


@section('content')
<!-- banner -->
<div id="homeVue">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">

            @if (count($banner) <= 0) <li data-target="#myCarousel" data-slide-to="0" class="active">
                </li>
                @else
                @foreach ($banner as $key => $item)
                @if ($key == 0)
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                @else
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class=""></li>
                @endif
                @endforeach
                @endif


        </ol>
        <div class="carousel-inner" role="listbox">

            @if (count($banner) <= 0) <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3><span>{{ $item->title }}</span></h3>
                        <p>{{ $item->subtitle }}</p>
                        <a class="hvr-outline-out button2" href="#">Shop Now </a>
                    </div>
                </div>
        </div>

        @else

        @foreach ($banner as $key => $item)

        @if ($key == 0)
        <div class="item active" style="background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat; 
	background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background-size:cover;">
            @else
            <div class="item" style="background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat; 
	background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../banner_img/{{$item->banner_photo_path}}) no-repeat;
	background-size:cover;">
                @endif


                <div class="container">
                    <div class="carousel-caption">
                        <h3><span>{{ $item->title }}</span></h3>
                        <p>{{ $item->subtitle }}</p>
                        <a class="hvr-outline-out button2" href="#">Shop Now </a>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>


    <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>What we <span>SALE</span></h2>
                        <h4>Let's Find Gift , Souvenir or Share to your special person </h4>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-location-arrow"></i>
                        <h1>Souvenir</h1>
                        <p>
                            to find souvenir base location
                        </p>
                        <br >
                        <button type="button" class="btn btn-default">see more</button>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-gift"></i>
                        <h1>Gift</h1>
                        <p>
                            to find gift for your special person
                        </p>
                        <br >
                        <button type="button" class="btn btn-default">see more</button>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <i class="fas fa-heart"></i>
                        <h1>Share</h1>
                        <p>
                            to support other person
                        </p>
                        <br >
                        <button type="button" class="btn btn-default">see more</button>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </section>



    <!-- //banner -->
    <!-- <div class="banner_bottom_agile_info">
        <div class="container">
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

     -->
    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="images/mid1.jpg" alt=" " class="img-responsive" />
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
            <h3 class="wthree_text_info">What's <span>Sale</span></h3>

            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="wo#">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('images/bb1.jpg') }}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h1><span>S</span>ale </h1>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
                <a href="#">
                    <div class="bb-middle-agileits-w3layouts grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('images/bottom3.jpg') }}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h1><span>S</span>ale </h1>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <a href="#">
                    <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('images/bottom4.jpg') }}" alt=" " class="img-responsive">
                            <figcaption>
                                <h1><span>S</span>ale </h1>
                                <p>Upto 65%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/grids-->
    <div class="agile_last_double_sectionw3ls">
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="wo#"><img src="images/bot-1.png" alt=" ">
                <h4>Souvenir <span>50%</span> offer</h4>
            </a>

        </div>
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="wo#"><img src="images/bot-2.jpg" alt=" ">
                <h4>Gifts <span>50%</span> offer</h4>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--/grids-->
    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">Top <span>Sales</span></h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    @foreach ($topsale as $key => $item)
                    <li>{{ $item->name }}</li>
                    @endforeach
                    {{-- <li> Men's</li>
                        <li> Women's</li>
                        <li> Kid 's</li>
                        <li> Teen 's</li> --}}
                </ul>

                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    @foreach ($topsale as $key => $item)
                    @if (count($item->topsales) > 0)

                    <div class="tab{{$key+1}}">
                        @foreach ($item->topsales as $key2 => $item2)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset("product_img/$item2->product_photo_path") }}" alt="" class="pro-image-front">
                                    <img src="{{ asset("product_img/$item2->product_photo_path") }}" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ url("/view-detail/$item2->id/$item2->name") }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="#">{{$item2->name}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">฿{{$item2->price}}</span>
                                        <del>฿{{$item2->sale_price}}</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="{{$item2->name}}" />
                                                <input type="hidden" name="amount" value="{{$item2->price}}" />
                                                <input type="hidden" name="discount_amount" value="{{$item2->sale_price}}" />
                                                <input type="hidden" name="currency_code" value="THB" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_one-->

                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- //new_arrivals -->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="#">Shop Now </a>
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
</div>
<!--grids-->
@include('app.vue.home')

@stop



@section('script')
<script>
    $(document).ready(function() {

    });
</script>
@stop