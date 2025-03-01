@extends('app.header')
@section('title', 'Home')

@section('style')
    <style>

    </style>
@stop

@section('content')

    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>View <span>Details </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="index.html">Home</a><i>|</i></li>
                        <li>View Details</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <ul class="slides">
                            <li data-thumb="{{ asset("product_img/$viewdetail->product_photo_path") }}">
                                <div class="thumb-image"> <img src="{{ asset("product_img/$viewdetail->product_photo_path") }}" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset("product_img/$viewdetail->product_photo_path") }}">
                                <div class="thumb-image"> <img src="{{ asset("product_img/$viewdetail->product_photo_path") }}" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset("product_img/$viewdetail->product_photo_path") }}">
                                <div class="thumb-image"> <img src="{{ asset("product_img/$viewdetail->product_photo_path") }}" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>{{ $viewdetail->name }}</h3>
                <p><span class="item_price">฿{{ $viewdetail->price }}</span> <del>฿{{ $viewdetail->sale_price }}</del></p>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked="">
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="description">
                    {{-- <h5>Check delivery, payment options and charges at your location</h5>
                    <form action="#" method="post">
                        <input type="text" value="Enter pincode" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                        <input type="submit" value="Check">
                    </form> --}}
                </div>
                {{-- <div class="color-quality">
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">5 Qty</option>
                            <option value="null">6 Qty</option>
                            <option value="null">7 Qty</option>
                            <option value="null">10 Qty</option>
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="occasional">
                    <h5>Types :</h5>
                    <div class="colr ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
                    </div>
                    <div class="clearfix"> </div>
                </div> --}}
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Wing Sneakers">
                                <input type="hidden" name="amount" value="650.00">
                                <input type="hidden" name="discount_amount" value="1.00">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="submit" name="submit" value="Add to cart" class="button">
                            </fieldset>
                        </form>
                    </div>

                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Share On : </li>
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
            <div class="clearfix"> </div>
            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Description</li>
                        <li>Reviews</li>
                        {{-- <li>Information</li> --}}
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page_agile_its_w3ls">
                                <h6>{{ $viewdetail->name }}</h6>
                                <p>{{ $viewdetail->description }}
                                </p>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">

                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                        <div class="bootstrap-tab-text-grid-left">
                                            <img src="images/t1.jpg" alt=" " class="img-responsive">
                                        </div>
                                        <div class="bootstrap-tab-text-grid-right">
                                            <ul>
                                                <li><a href="#">Admin</a></li>
                                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula
                                                augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                                corporis
                                                suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                                                vel eum iure reprehenderit.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                        <h4>add a review</h4>
                                        <form action="#" method="post">
                                            <input type="text" name="Name" required="Name">
                                            <input type="email" name="Email" required="Email">
                                            <textarea name="Message" required=""></textarea>
                                            <input type="submit" value="SEND">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="tab3">

                            <div class="single_page_agile_its_w3ls">
                                <h6>Big Wing Sneakers (Navy)</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget
                                    nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.
                                </p>
                                <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque
                                    vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat
                                    augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore
                                    et dolore magna aliqua.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals">
                <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
                @foreach ($features as $item)

                    <div class="col-md-3 product-men single">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset("product_img/$item->product_photo_path") }}" alt=""
                                    class="pro-image-front">
                                <img src="{{ asset("product_img/$item->product_photo_path") }}" alt=""
                                    class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">{{ $item->name }}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">฿{{ $item->price }}</span>
                                    <del>฿{{ $item->sale_price }}</del>
                                </div>
                                <div
                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                            <input type="hidden" name="amount" value="30.99">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>
    <!--//single_page-->
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
