<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>{{$title}}</title>
    <link rel="icon" href="http://crm.techres.vn/files/system/_file5f2695543d7d7-favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./css/style.css?version=1">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <style>
        .button-focus-happy-hour {
            background-color: #0ac282 !important;
        }
        .background-voucher1 {
            background-image:url('./images/happyhour/background.jpg'); background-position: inherit;
        }
        .background-voucher2 {
            background-image:url('./images/happyhour/background-mobile.png'); background-position: top; overflow: hidden;
        }
    </style>
</head>
<body>
<div class="theme-layout">
    <div class="gap2 vh100">
        <div class="bg-image background-voucher1" id="background-happy-hour"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{--            <div class="row">--}}
                    {{--                <div class="col-lg-12" style="text-align: center">--}}
                    {{--                    <div class="logo" style="position: fixed; top: 10px; left: 10px">--}}
                    {{--                        <a href="#!" title=""><img--}}
                    {{--                                    src="./images/happyhour/logo.png"--}}
                    {{--                                    alt=""></a>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="logo" style="position: fixed; top: 20px; right: 10px">--}}
                    {{--                        <a href="#!" title=""><img--}}
                    {{--                                    src="./images/happyhour/icon1.png"--}}
                    {{--                                    alt=""></a>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="coming-head row" style="display: flex; padding-bottom: 0; top: 20px;">--}}
                    {{--                        <div class="col-12">--}}
                    {{--                            <a href="#!" title=""><img style="width: 80%"--}}
                    {{--                                                       src="./images/happyhour/title.png"--}}
                    {{--                                                       alt=""></a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="coming-meta" style="margin-top: -100px">--}}
                    {{--                        <img style="margin-top:100px;width: 80%"--}}
                    {{--                             src="./images/happyhour/middle.png"--}}
                    {{--                             alt="">--}}
                    {{--                        --}}{{--                        <div class="logo" style="float: right">--}}
                    {{--                        --}}{{--                            <a href="#!" title=""><img--}}
                    {{--                        --}}{{--                                        src="./images/happyhour/right.png"--}}
                    {{--                        --}}{{--                                        alt=""></a>--}}
                    {{--                        --}}{{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--            <img style="float: right; position: fixed; left: 10px; top: 20%;"--}}
                    {{--                 src="./images/happyhour/left.png"--}}
                    {{--                 alt="">--}}
                    <div class="coming-meta" id="form-register-happy-hour"
                         style="padding-bottom: 0; position: fixed; left: 0; bottom: 50px">
                        <label style="font-size: 25px;color: #fff;" class="d-none"
                               id="label-register-happy-hour">Lỗi hệ thống</label><br>
                        <div class="row" id="div-input-voucher-promotion">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-wraper5">
    <div class="popup" style="width: 90vw">
        <div class="popup-meta">
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <div class="sec-heading style9 text-center" style="margin-bottom: 1vh !important;">
                        <span><i class="fa fa-trophy"></i> Nguyen123.vn</span>
                        <h2>ĐẶT TIỆC TẤT NHIÊN</h2>
                        <h2><span>ƯU ĐÃI TỤT QUẦN</span></h2>
                    </div>
                </div>
                <div class="col-12 row" style="max-height: 60vh; overflow-y: auto; padding-right: 0 !important"
                     id="data-gift-happy-hour-promotion">

                </div>
            </div>
            <a class="main-btn float-right" href="javascript:void(0)" id="close-popup-register-happy-hour" title=""
               style="margin-top: 10px"
               data-ripple="">Đóng</a>
            <a class="main-btn float-right" href="javascript:void(0)" title=""
               style="margin-top: 10px"
               data-ripple="" onclick="packageHappyHour()">Đăng ký</a>
        </div>
    </div>
</div>
<div class="popup-wraper7">
    <div class="popup events" style="width: 50vw !important;">
        <div class="popup-meta">
            <div class="popup-head">
                <h2>Chi tiết chương trình Voucher 50%</h2>
            </div>
            <div class="event-detail">
                <figure><img src="./images/resources/fav-banner.jpg" alt=""></figure>
                <div class="event-detailmeta">
                    <h4>Ocean Motel good night event in columbia for the youngests only.</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <a class="main-btn float-right" href="javascript:void(0)" id="close-popup-detail-happy-hour" data-ripple="">Đóng</a>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalsmall">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thông báo</h4>
            </div>
            <div class="modal-body">Đăng ký thành công</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>

        </div>
    </div>
</div>
<div class="d-none">
    <lable id="brand-happy-hour">{{$brand}}</lable>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./js/main.min.js"></script>
<script src="./js/jquery.downCount.js"></script>
<script src="./js/script.js"></script>
<script src="./js/happy_hour/index.js?version=1"></script>
</body>
</html>
