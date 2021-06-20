<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- Bootstrap CSS Phuc -->
    <link rel="stylesheet" href="{{ asset('font_end/Phuc/css/login.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"
        integrity="sha512-MxCUiuI+uAXgr9Z9fxH1Y82CnqRrWySWqHejZyUMW55VJqL4trf9FXM/SiT7NQXZd4H0nJOr6FAAJTEjAmrm+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/plugins.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/style.css') }}" type="text/css">
</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="{{ asset('font_end/Nam/images/logo1.png') }}" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="index-2.html"><img class="logo" src="{{ asset('font_end/Nam/images/logo1.png') }}" alt=""
                            width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                                Rạp <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a hreft="">Tất cả các rạp</a></li>
                                <li><a href="">Rạp đặc biệt</a></li>
                                <li><a href="">Rạp sắp mở</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Phim<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Phim sắp chiếu<i
                                            class="ion-ios-arrow-forward"></i></a>
                                    <ul class="dropdown-menu level2">
                                        <li><a href="moviegrid.html">Phim sắp chiếu</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="moviesingle.html">Phim sắp chiếu</a></li>
                                <li><a href="moviesingle.html">Phim đang chiếu</a></li>
                                <!-- <li class="it-last"><a href="seriessingle.html">Series single</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="celebritygrid01.html">celebrity grid 01</a></li>
                                <li><a href="celebritygrid02.html">celebrity grid 02 </a></li>
                                <li><a href="celebritylist.html">celebrity list</a></li>
                                <li class="it-last"><a href="celebritysingle.html">celebrity single</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Thành Viên <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="bloglist.html">Tài khoản</a></li>
                                <li><a href="bloggrid.html">Quyền lợi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                community <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="userfavoritegrid.html">user favorite grid</a></li>
                                <li><a href="userfavoritelist.html">user favorite list</a></li>
                                <li><a href="userprofile.html">user profile</a></li>
                                <li class="it-last"><a href="userrate.html">user rate</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <!-- <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="landing.html">Landing</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">Vé của tôi</a></li>
                        <!-- <li><a href="#">Help</a></li> -->
                        <li class="loginLink"><a href="#">đăng nhập</a></li>
                        <li class="btn signupLink"><a href="#">đăng kí</a></li>
                    </ul>
                    <!-- <div class="flex-child-menu menu-right">
                        <button>Vé của tôi</button>
                    </div> -->
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">Movie</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
            </div>
        </div>


    </header>
    <!-- END | Header -->

    <div class="hero common-hero">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> blog detail</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> blog listing</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- blog detail section-->


    <!--form-login-->
    <div class="form-login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 r-login">
                    <div class="form">
                        <div class="tab">
                            <button class="tablinks">LOGIN</button>
                            <BUtton class="tablinks">REGISTER</BUtton>
                        </div>
                        <div class="sign" id="sign-in">
                            <form action="" class="form-container" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email or phone number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email or phone number">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block but">LOGIN</button>
                                <a href="#" id="link-forget">Forgot Your Password?</a>
                            </form>
                        </div>
                        <div class="register" id="regis">
                            <form action="{{ url('users/register') }}" class="res-container ko" method="POST"
                                id="loginForm">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <span>*</span>
                                    <input type="text" class="form-control" name="textName" id="reName"
                                        aria-describedby="helpId" placeholder="Name">
                                    <span class="text-danger error-text textName_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Phone number</label>
                                    <span>*</span>
                                    <input type="text" class="form-control" name="textPhone" id="rePhone"
                                        aria-describedby="helpId" placeholder="Phone">
                                    <span class="text-danger error-text textPhone_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <span>*</span>
                                    <input type="email" class="form-control" name="textEmail" id="reMail"
                                        aria-describedby="helpId" placeholder="Email">
                                    <span class="text-danger error-text textEmail_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <span>*</span>
                                    <input type="password" class="form-control" name="textPassword" id="rePass"
                                        aria-describedby="helpId" placeholder="Password">
                                    <span class="text-danger error-text textPassword_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <span>*</span>
                                    <input type="date" class="form-control" name="textBirth" id="reBirth"
                                        aria-describedby="helpId" value="1998-30-6">
                                    <span class="text-danger error-text textBirth_error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <span>*</span>
                                    <div class="f-radio">
                                        <input type="radio"> Female
                                        <input type="radio"> Male
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Prefer site</label>
                                    <select class="form-control" name="textPrefer" id="P-select">
                                        <option>X-star Ho Chi Minh</option>
                                        <option>X-star Hai Phong</option>
                                        <option>X-star Ha Noi</option>
                                        <option>X-star Da Nang</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block res">REGISTER</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 l-slide">
                    <div class="slide">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{ asset('font_end/Phuc/img/login1.png') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('font_end/Phuc/img/login2.jpg') }}" alt="Second slide">

                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('font_end/Phuc/img/login3.jpg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of  blog detail section-->
    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href=""><img class="logo" src="{{ asset('font_end/Nam/images/images/logo1.png') }}" alt=""></a>
                    <p>5th Avenue st, manhattan<br>
                        New York, NY 10001</p>
                    <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blockbuster</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email...">
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
            <div class="backtotop">
                <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!--Phuc-->
    <script type="text/javascript" src="{{ asset('font_end/Phuc/js/login1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('font_end/Phuc/js/login.js') }}"></script>


    <!--Nam-->
    <script src="{{ asset('font_end/Nam/js/jquery.js') }}"></script>
    <script src="{{ asset('font_end/Nam/js/plugins.js') }}"></script>
    <script src="{{ asset('font_end/Nam/js/plugins2.js') }}"></script>
    <script src="{{ asset('font_end/Nam/js/custom.js') }}"></script>
</body>

</html>
