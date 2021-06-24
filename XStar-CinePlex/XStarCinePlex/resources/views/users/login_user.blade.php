<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('font_end/Phuc/css/login.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
                            <form action="{{ url('user/login') }}" class="form-container" method="POST">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                  {{(Session::get('fail'))}}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email or phone number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email or phone number" name="loginEmail" value="{{ old('loginEmail') }}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                    <span class="text-danger">@error('loginEmail')
                                        {{ $message }}
                                    @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" name="loginPassword">
                                        <span class="text-danger">@error('loginPassword')
                                            {{ $message }}
                                        @enderror</span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block but">LOGIN</button>
                                <a href="#" id="link-forget">Forgot Your Password?</a>
                            </form>
                        </div>
                        <div class="register" id="regis">

                            <form action="{{ url('user/register') }}" class="res-container ko" id="loginForm" name="loginForm"">
                                @csrf
                                <div class=" form-group">
                                <label for="">Name</label>
                                <span>*</span>
                                <input type="text" class="form-control" name="textName" id="textName"
                                    aria-describedby="helpId" placeholder="Name">
                                <div class="alert-message" id="textNameError"></div>
                        {{--         <span class="text-danger">{{  $errors->first('textName') }}</span> --}}

                        </div>

                        <div class="form-group">
                            <label for="">Phone number</label>
                            <span>*</span>

                            <input type="text" class="form-control" name="textPhone" id="textPhone"
                                aria-describedby="helpId" placeholder="Phone">
                            <div class="alert-message" id="textPhoneError"></div>
                       {{--      <span class="text-danger">{{ $errors->first('textPhone') }}</span> --}}

                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <span>*</span>

                            <input type="email" class="form-control" name="textEmail" id="textEmail"
                                aria-describedby="helpId" placeholder="Email">
                           <div class="alert-message" id="textEmailError"></div>

                    {{--         <span class="text-danger">{{ $errors->first('textEmail')}}</span> --}}

                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <span>*</span>

                            <input type="password" class="form-control" name="textPassword" id="textPassword"
                                aria-describedby="helpId" placeholder="Password">
                             <div class="alert-message" id="textPasswordError"></div>
                         {{--    <span class="text-danger">{{ $errors->first('textPassword') }}</span> --}}
                        </div>

                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <span>*</span>

                            <input type="date" class="form-control" name="textBirth" id="textBirth"
                                aria-describedby="helpId">
                           <div class="alert-message" id="textBirtherror"></div>
                         {{--    <span class="text-danger">{{ $errors->first('textBirth') }}</span> --}}
                        </div>

                        <div class="form-group">
                            <label for="">Gender</label>
                            <span>*</span>
                            <div class="f-radio">

                                <input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}> Female
                                <input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}> Male
                          {{--       <span class="text-danger">{{ $errors->first('gender') }}</span> --}}
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

                        <div class="alert alert-success d-none" id="msg_div">
                            <span id="res_message"></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block res" id="send_reg">REGISTER</button>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script type="text/javascript" src="{{ asset('font_end/Phuc/js/login.js') }}"></script>

</body>

</html>
