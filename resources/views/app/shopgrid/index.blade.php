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
            <h3>{{ $menu }} <span>|{{ $submenu }} </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="index.html">Home</a><i>|</i></li>
                        <li>{{ $menu }}<i>|</i></li>
                        <li>{{ $submenu }}</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->
            <div class="col-md-4 products-left">
                <div class="filter-price">
                    <h3>Filter By <span>Price</span></h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>Community Poll</h4>
                    <div class="swit form">
                        <form>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More
                                        convenient for shipping and delivery</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to
                                        choose</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back
                                        guaranteed</label> </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div>
                            </div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span>Compare(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sort By</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Default</option>
                            <option value="null">Name(A - Z)</option>
                            <option value="null">Name(Z - A)</option>
                            <option value="null">Price(High - Low)</option>
                            <option value="null">Price(Low - High)</option>
                            <option value="null">Model(A - Z)</option>
                            <option value="null">Model(Z - A)</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Showing</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option>
                            <option value="null">28</option>
                            <option value="null">35</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                {{-- <div class="men-wear-top">

                    <div id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="{{ asset('images/banner2.jpg') }}" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="{{ asset('images/banner5.jpg') }}" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="{{ asset('images/banner2.jpg') }}" alt=" " />
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> --}}
                {{-- <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="{{ asset('images/bb2.jpg') }}" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Exclusive Men's <span>Collections</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                            odit aut fugit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div> --}}
              
                @if (count($product) > 0)
                    
              
                @foreach ($product as $key => $item)
                @if ($key <= 2)
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ asset("product_img/$item->product_photo_path") }}" alt="" class="pro-image-front">
                            <img src="{{ asset("product_img/$item->product_photo_path") }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ url("/view-detail/$item->id/$item->name") }}" class="link-product-add-cart">Quick View</a>
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
                                        <input type="hidden" name="item_name" value="Party Men's Blazer">
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
                @endif
                @endforeach
          
                @else

                <span><center>No Product.</center></span>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <div class="single-pro">
                @if (count($product) > 3)
                @foreach ($product as $key => $item)
                @if ($key > 2)
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ asset('images/m1.jpg') }}" alt="" class="pro-image-front">
                            <img src="{{ asset('images/m1.jpg') }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Formal Blue Shirt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //mens -->
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
