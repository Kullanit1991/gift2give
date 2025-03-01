<!DOCTYPE html>

<head>
    <title>Gift2Gives</title>
    <!--/tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Gift, Gives, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        .profile-pic {
            color: transparent;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .profile-pic input {
            display: none;
        }

        .profile-pic img {
            position: absolute;
            object-fit: cover;
            width: 165px;
            height: 165px;
            box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
            border-radius: 100px;
            z-index: 0;
        }

        .profile-pic .-label {
            cursor: pointer;
            height: 165px;
            width: 165px;
        }

        .profile-pic:hover .-label {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            color: #fafafa;
            transition: background-color 0.2s ease-in-out;
            border-radius: 100px;
            margin-bottom: 0;
        }

        .profile-pic span {
            display: inline-flex;
            padding: 0.2em;
            height: 2em;
        }
    </style>
    <!--//tags -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/bootstrap-select-country.min') }}" rel='stylesheet' type='text/css' />
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>


    @yield('style')
</head>


<body>
    <div id="header">
        <!-- header -->
        <div class="header" id="home">
            <div class="container">
                <ul>
                    @guest
                    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                    <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
                    @endguest

                    <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">gift2gives.thailand@gmail.com</a></li>
                    @auth
                    <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-user" aria-hidden="true"></i>
                            Hello! {{ Auth::user()->name }}</a></li>
                    <li> <a href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
        <!-- //header -->
        <!-- header-bot -->
        <div class="header-bot">
            <div class="header-bot_inner_wthreeinfo_header_mid">
                <div class="col-md-4 header-middle">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Search here..." required="">
                        <input type="submit" value=" ">
                        <div class="clearfix"></div>
                    </form>
                </div>
                <!-- header-bot -->
                <div class="col-md-4 logo_agile">
                    <h1><a href="{{ url('/') }}"><img src="{{ asset('img\logo\FullColor_TransparentBg_1280x1024_72dpi.png') }}" /> <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
                </div>
                <!-- header-bot -->
                <div class="col-md-4 agileits-social top_content">
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social">
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
                <div class="col-md-4 header-right">

                    <!-- <ul>
                        <li class="share"><a style="text-decoration : none;"
                        href="{{ URL::to('change/en') }}"><img src="{{ asset('images/england-flag.jpg') }}" width="20px"/> en</a>
                        <a style="text-decoration : none;"
                        href="{{ URL::to('change/th') }}"><img src="{{ asset('images/TH.jpg') }}" width="20px"/> th</a></li>
                    
                    
                        <li><a href="{{ URL::to('change/en') }}"><img src="{{ asset('images/england-flag.jpg') }}" width="20px" /> en </a></li>
                        <li><a href="{{ URL::to('change/th') }}"><img src="{{ asset('images/TH.jpg') }}" width="20px" /> th</a></li>
                    </ul> -->

                    <select class="form-select">
                        <option style="background-image:url('images/england-flag.jpg');" selected> en</option>
                        <option style="background-image:url('images/TH.jpg');" value="th"> th</option>
                    </select>


                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-bot -->
        <!-- banner -->
        <div class="ban-top">
            <div class="container">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item {{ request()->is('/') ? 'active menu__item--current' : '' }}">
                                        <a class="menu__link" href="{{ url('/') }}">{{ trans('message.Home') }} <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class=" menu__item {{ request()->is('about') ? 'active menu__item--current' : '' }}">
                                        <a class="menu__link" href="{{ url('/about') }}">{{ trans('message.About') }} </a>
                                    </li>
                                    @if (count($response) > 0)

                                    @foreach ($response as $item)

                                    @if ($item->id != 4)


                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$item->menu_name}} <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="agile_inner_drop_nav_info">
                                                <div class="col-sm-6 multi-gd-img1 multi-gd-text ">

                                                    @if ($item->id == 1)
                                                    <a href="#"><img src="{{ asset('images/mens.jpg') }}" alt=" " /></a>
                                                    @elseif($item->id == 2)
                                                    <a href="#"><img src="{{ asset('images/top1.jpg') }}" alt=" " /></a>
                                                    @elseif($item->id == 3)
                                                    <a href="#"><img src="{{ asset('images/kids.jpeg') }}" alt=" " /></a>
                                                    @endif

                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <?php
                                                        foreach ($item->submenu as $key => $value) {
                                                            # code...
                                                            if ($key < 5) {
                                                        ?>
                                                                <li><a href="{{ url("/list/$item->menu_name/$value->submenu_name/$value->id") }}">{{ $value->submenu_name }}</a></li>

                                                        <?php }
                                                        } ?>
                                                    </ul>
                                                </div>
                                                <?php
                                                if (count($item->submenu) > 5) {
                                                    foreach ($item->submenu as $key => $value) {
                                                        # code...
                                                        if ($key >= 5) {
                                                ?>
                                                            <div class="col-sm-3 multi-gd-img">
                                                                <ul class="multi-column-dropdown">
                                                                    <li><a href="{{ url("/list/$item->menu_name/$value->submenu_name/$value->id") }}">{{ $value->submenu_name }}</a></li>
                                                                </ul>
                                                            </div>
                                                <?php
                                                        }
                                                    }
                                                }

                                                ?>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="menu__item dropdown">
                                        <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">{{$item->menu_name}} <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            @foreach ($item->submenu as $key => $value)
                                            <li><a href="{{ url("/list/$item->menu_name/$value->submenu_name/$value->id") }}">{{ $value->submenu_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach

                                    @endif

                                    {{-- <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Women <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="agile_inner_drop_nav_info">
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="#">Gifts for Girlfriend</a></li>
                                                        <li><a href="#">Gifts for Wife</a></li>
                                                        <li><a href="#">Gifts for Mom</a></li>
                                                        <li><a href="#">Gifts for Grandma</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="#">Christmas Gifts</a></li>
                                                        <li><a href="#">Anniversary</a></li>
                                                        <li><a href="#">Birthday Gifts</a></li>
                                                        <li><a href="#">Wedding Gifts</a></li>
                                                        <li><a href="#">Graduation Gifts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                                    <a href="#"><img src="images/top1.jpg" alt=" " /></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Kids <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="agile_inner_drop_nav_info">
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="#">Gifts for Boys</a></li>
                                                        <li><a href="#">Gifts for Girls</a></li>
                                                        <li><a href="#">Gifts for Tween Boys</a></li>
                                                        <li><a href="#">Gifts for Tween Girls</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="#">Christmas Gifts</a></li>
                                                        <li><a href="#">Birthday Gifts</a></li>
                                                        <li><a href="#">First Communion Gifts</a></li>
                                                        <li><a href="#">Kindergarten Graduation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                                    <a href="#"><img src="images/kids.jpeg" alt=" " /></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="menu__item dropdown">
                                        <a class="menu__link" href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <li><a href="icons.html">Christmas</a></li>
                                            <li><a href="typography.html">Anniversary</a></li>
                                            <li><a href="typography.html">Wedding</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class=" menu__item {{ request()->is('contact') ? 'active menu__item--current' : '' }}">
                                        <a class="menu__link" href="{{ url('/contact') }}">{{ trans('message.Contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //banner-top -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label>Email</label>
                                <span></span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label>Password</label>
                                <span></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <input type="submit" value="Sign In">
                        </form>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                            <li><a href="{{ url('auth/facebook') }}" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-google" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-google" aria-hidden="true"></i></div>
                                </a></li>
                            {{-- <li><a href="#" class="twitter">
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
                                </a></li> --}}
                        </ul>
                        <div class="clearfix"></div>
                        <p><a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a></p>

                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <img src="{{ asset('images/gg_1.png') }}" alt=" " />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label>Name</label>
                            </div>
                            <div class="styled-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label>Email</label>
                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label>Password</label>
                            </div>
                            <div class="styled-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label>Confirm Password</label>
                                <span></span>
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-google" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-google" aria-hidden="true"></i></div>
                                </a></li>
                            {{-- <li><a href="#" class="twitter">
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
                                </a></li> --}}
                        </ul>
                        <div class="clearfix"></div>
                        <p><a href="#">By clicking register, I agree to your terms</a></p>

                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <img src="{{ asset('images/gg_1.png') }}" alt=" " />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->

    <!-- Modal3 -->

    <!-- Modal -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">User Profile</h4>
                </div>
                <div class="modal-body">


                    <div class="profile-pic">

                        <label class="-label" for="file" style="margin-right: -300px;">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        @php
                        $profile = "dist/img/default-150x150.png";
                        $name = "";
                        $email = "";
                        $address = "";

                        if (Auth::user()) {

                        $profile = "user_profile/".Auth::user()->profile_photo_path;
                        $name = Auth::user()->name;
                        $email = Auth::user()->email;
                        $address = Auth::user()->home_address;
                        };

                        @endphp

                        <input id="file" name="file" type="file" onchange="loadFile(event)" style=" opacity: 0; " />

                        <img src="{{ asset("$profile") }}" id="output" width="200" />

                    </div>

                    <center>

                        <!-- <img src="{{ asset("user_profile/$profile") }}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a> -->
                        <h3 class="media-heading">{{ $name }}</h3>
                        <span><strong>Email Address: </strong></span>
                        <!-- <span class="label label-warning">HTML5/CSS</span> -->
                        <span class="label label-success">{{ $email }}</span>
                        <!-- <span class="label label-info">Microsoft Office</span> -->
                        <!-- <span class="label label-success">Windows XP, Vista, 7</span> -->
                    </center>
                    <hr>
                    <center>
                        <p class="text-left"><strong>Home Address: </strong><br>
                            {{ $address }}.
                        </p>
                        <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Edit Profile</button>
                    </center>
                </div>
            </div>
        </div>
    </div>


    <!-- //Modal3 -->


    <script type="text/javascript">
        $(document).ready(function() {
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        });

        function loadFile(event) {

            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);



            let id = <?php if (auth()->user()) echo auth()->user()->id; ?>;

            var formData = new FormData();
            formData.append('id', id);
            formData.append('file', event.target.files[0]);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('profile.save') }}",
                type: "POST",
                dataType: 'json',
                processData: false,
                cache: false,
                contentType: false,
                data: formData,
                success: function(response) {
                    console.log(response);

                },
            });
        }
    </script>
    @include('app.vue.header')

    @include('app.vue.login')

    @include('app.vue.register')

    @yield('content')

    @include('app.footer')

</body>

</html>