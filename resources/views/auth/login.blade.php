@extends('auth.header')
@section('title', 'Login')
@section('content')

    <div class="main">


        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <fieldset class="clearfix">

                                <p><span class="fa fa-user"></span><input  type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <!-- JS because of IE support; better: placeholder="Username" -->
                                <p><span class="fa fa-lock"></span><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p> <!-- JS because of IE support; better: placeholder="Password" -->

                                <div>
                                    <span style="width:48%; text-align:left;  display: inline-block;">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                        <label class="custom-control-label" for="remember">Remember me</label>
                                    </span>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit"
                                            value="Sign In"></span>
                                </div>

                            </fieldset>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logo"><img src="img\logo\FullColor_TransparentBg_1280x1024_72dpi.png" width="75%"/>

                        <div class="clearfix"></div>
                    </div>

                </div>
            </center>
        </div>

    </div>
@endsection

<style>

div.main{
    background: #26cdbe; /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  #26cdbe 1%, #1c2b5a 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%#26cdbe), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  #26cdbe 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover, #26cdbe 1%,#1c2b5a 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  #26cdbe 1%,#1c2b5a 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  #26cdbe 1%,#1c2b5a 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
height:calc(100vh);
width:100%;
}

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* ---------- GENERAL ---------- */

* {
  box-sizing: border-box;
    margin:0px auto;

  &:before,
  &:after {
    box-sizing: border-box;
  }

}

body {
   
    color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

a {
	color: #eee;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

input {
	border: none;
	font-family: 'Open Sans', Arial, sans-serif;
	font-size: 14px;
	line-height: 1.5em;
	padding: 0;
	-webkit-appearance: none;
}

p {
	line-height: 1.5em;
}

.clearfix {
  *zoom: 1;

  &:before,
  &:after {
    content: ' ';
    display: table;
  }

  &:after {
    clear: both;
  }

}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
}

/* ---------- LOGIN ---------- */

#login form{
	width: 250px;
}
#login, .logo{
    display:inline-block;
    width:40%;
}
#login{
border-right:1px solid #fff;
  padding: 0px 22px;
  width: 59%;
}
.logo{
color:#fff;
font-size:50px;
  line-height: 125px;
}

#login form span.fa {
	background-color: #fff;
	border-radius: 3px 0px 0px 3px;
	color: #000;
	display: block;
	float: left;
	height: 50px;
    font-size:24px;
	line-height: 50px;
	text-align: center;
	width: 50px;
}

#login form input {
	height: 50px;
}
fieldset{
    padding:0;
    border:0;
    margin: 0;

}
#login form input[type="text"], input[type="password"] {
	background-color: #fff;
	border-radius: 0px 3px 3px 0px;
	color: #000;
	margin-bottom: 1em;
	padding: 0 16px;
	width: 200px;
}

#login form input[type="submit"] {
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  background-color: #000000;
  color: #eee;
  font-weight: bold;
  /* margin-bottom: 2em; */
  text-transform: uppercase;
  padding: 5px 10px;
  height: 30px;
}

#login form input[type="submit"]:hover {
	background-color: #d44179;
}

#login > p {
	text-align: center;
}

#login > p span {
	padding-left: 5px;
}
.middle {
  display: flex;
  width: 600px;
}
</style>
