@extends('layout_admin')
@section('admin_content')




    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ADD FILMS
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                        <a class="fa fa-cog" href="javascript:;"></a>
                        <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal " id="commentForm" method="get" action="" novalidate="novalidate" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-3">Tên Phim</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="cname" name="film-name" minlength="2" type="text" required="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="curl" class="control-label col-lg-3">Tóm Tắt Nội Dung</label>
                                <div class="col-lg-6">
                                    <input class="form-control"  type="text" name="film-content">
                                </div>
                            </div>
                            
                            
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Đạo Diễn</label>
                                <div class="col-lg-6">
                                    <input class="form-control "  name="film-director" >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Thể Loại</label>
                                <div class="col-lg-6">
                                    <input class="form-control "  name="film-genre" required="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Dien Vien</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="ccomment" name="comment" required="">
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Thời Lượng</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="ccomment" name="comment" required="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Hình Ảnh</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-3">Ngày Khởi Chiếu</label>
                                <div class="col-lg-6">
                                    <input class="form-control "  type="text" name="film-date" required="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">TraiLer</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Luot Like</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-3">Gia Ve</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>

    <!-- page end-->

@endsection
