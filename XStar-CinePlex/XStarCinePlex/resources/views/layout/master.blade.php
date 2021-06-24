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
    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/plugins.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/style.css') }}" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('font_end/Phuc/css/login.css') }}" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font_end/Nam/css/my-style.css') }}" type="text/css">
    <script src="{{ asset('font_end/Nam/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"
        integrity="sha512-MxCUiuI+uAXgr9Z9fxH1Y82CnqRrWySWqHejZyUMW55VJqL4trf9FXM/SiT7NQXZd4H0nJOr6FAAJTEjAmrm+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--preloading-->
    <div id="preloader">

        <img class="logo" src="{{ asset('font_end/Nam/images/main-logo.jpg') }}" alt="" width="119" height="58">

        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>


    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container-fluid" style="width:auto">
            <!-- Nam -->
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-collapse" style="width:100%; background-color::black">
                    <div class="navbar-header logo">
                        <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <div id="nav-icon1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <a href="index-2.html"><img class="logo"
                                src="{{ asset('font_end/Nam/images/main-logo.jpg') }}" alt="" width="119"
                                height="58"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rạp
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Tất cả các rạp</a>
                                    <a class="dropdown-item" href="#">Rạp đặc biệt</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Phim đang chiếu</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Phim
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Phim đang chiếu</a>
                                    <a class="dropdown-item" href="#">Phim sắp chiếu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Thành viên
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Tài khoản</a>
                                    <a class="dropdown-item" href="#">Quyền lợi</a>
                            </li>
                            <li><a class="nav-item nav-link" href="#">Vé của tôi</a></li>

                            <button type="button" class="btn btn-success btn-rounded">Đăng nhập</button>
                            <button type="button" class="btn btn-danger btn-rounded"><a href="{{ url('Logout') }}">Dang Xuat</a></button>
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Tất cả các rạp</a>
                                    <a class="dropdown-item" href="#">Rạp đặc biệt</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Phim đang chiếu</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li> -->
                        </ul>

                    </div>
                </nav>
                <!-- top search form -->

                <!-- end search form -->
            </div>
            <!-- End Nam -->

            <div class="top-search">
                <select>
                    <option value="united">Movie</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">


            </div>

            <!-- <div class="top-search">
                <select>
                    <option value="united">Movie</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
            </div> -->

        </div>


    </header>
    <!-- END | Header -->

    <div class="hero common-hero">

        <!-- <div class="container">
            <div class="row">

                    <div class="hero-ct">
                        <h1> blog detail</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> blog listing</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div> -->
    </div>
    <!-- blog detail section-->


    <!------ this is contnet  ------>
    @yield('content')
    <!------ end contnet  ------>




    <!-- end of  blog detail section-->
    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">

                    <!-- <a href=""><img class="logo" src="{{ asset('font_end/Nam/images/main-logo.png') }}" alt=""></a> -->

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

                    <h4>tài khoản</h4>
                    <ul>
                        <li><a href="#">Tài khoản của tôi</a></li>

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
