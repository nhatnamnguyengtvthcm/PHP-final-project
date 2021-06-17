@extends('layout.master')
@section('content')

      <!--nav-login-->
      <div class="container">
        <div class="row nav-log">
             <div class="col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-md-8 col-sm-8 col-xs-8">
              <a href="#" class="float-right"><i class="fas fa-sign-out-alt mr-1"></i>Log out</a>
                <a href="#" class="float-right"><i class="fas fa-user mr-1"></i>Login</a>
            </div>
        </div>
      </div>
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
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email or phone number</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or phone number">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary btn-block but">LOGIN</button>
                          <a href="#" id="link-forget">Forgot Your Password?</a>
                        </form>
                    </div>
                    <div class="register" id="regis">
                      <form action="" class="res-container ko" method="POST">
                          <div class="form-group">
                            <label for="">Name</label>
                            <span>*</span>
                            <input type="text"
                              class="form-control" name="" id="reName" aria-describedby="helpId" placeholder="Name">
                          </div>

                          <div class="form-group">
                            <label for="">Phone number</label>
                            <span>*</span>
                            <input type="text"
                              class="form-control" name="" id="rePhone" aria-describedby="helpId" placeholder="Phone">
                          </div>

                          <div class="form-group">
                            <label for="">Email</label>
                            <span>*</span>
                            <input type="email"
                              class="form-control" name="" id="reMail" aria-describedby="helpId" placeholder="Email">
                          </div>

                          <div class="form-group">
                            <label for="">Password</label>
                            <span>*</span>
                            <input type="password"
                              class="form-control" name="" id="rePass" aria-describedby="helpId" placeholder="Password">
                          </div>

                          <div class="form-group">
                            <label for="">Date of Birth</label>
                            <span>*</span>
                            <input type="date"
                              class="form-control" name="" id="reBirth" aria-describedby="helpId" value="1998-30-6">
                          </div>

                          <div class="form-group">
                            <label for="">Gender</label>
                            <span>*</span>
                            <div class="f-radio">
                              <input type="radio" > Female
                              <input type="radio"> Male
                            </div>
                           </div>

                           <div class="form-group">
                             <label for="">Prefer site</label>
                             <span>*</span>
                             <select class="form-control" name="" id="P-select">
                               <option>X-star Hồ Chí Minh</option>
                               <option>X-star Hải Phòng</option>
                               <option>X-star Hà Nội</option>
                               <option>X-star Đà Nẵng</option>
                             </select>
                           </div>

                           <button type="submit" class="btn btn-primary btn-block res">REGISTER</button>
                      </form>
                    </div>
                </div>
              </div>
              <div class="col-md-8 col-sm-12 col-xs-12 l-slide" >
                  <div class="slide">
                      <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselId" data-slide-to="1"></li>
                          <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <img src="img/login1.png" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img src="img/login2.jpg" alt="Second slide">

                          </div>
                          <div class="carousel-item">
                            <img src="img/login3.jpg" alt="Third slide">
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


@stop
