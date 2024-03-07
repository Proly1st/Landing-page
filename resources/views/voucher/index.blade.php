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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>
<body>
<div class="theme-layout">
    <div class="gap2 mate-black medium-opacity vh100">
        <div class="bg-image" style="background-image:url('./images/resources/coming-soon-bg.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="coming-head">
                        <div class="logo">
                            <a href="index.html" title=""><img
                                    src="https://api.upload.techres.vn/public/resource/TMS/MEDIA_TECHRES/0/0/111/2021/2/14-2-2021/image/original/media_Techres--14-2-2021-1613318030453-TECHRES-LOGO-FINAL-CMYK(1)-02.png"
                                    alt=""></a>
                        </div>
                        <ul class="social-circle ">
                            <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
                            <li><a class="google-color" href="#" title="" id="open-popup-detail-voucher"><i
                                        class="fa fa-exclamation-circle"></i></a></li>
                        </ul>
                    </div>
                    <div class="coming-meta" id="form-register-voucher">
                        {{--Data --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-wraper5">
    <div class="popup">
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Tải ứng dụng Aloline và đăng ký tài khoản với số điện thoại vừa rồi nhé !</h5>
            </div>
            <div class="upload-boxes">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="smal-box">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=vn.techres.line"><i
                                    class="fa fa-android" style="font-size: 100px; color: #22b162;"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="smal-box">
                            <a target="_blank"
                               href="https://apps.apple.com/vn/app/aloline-review-t%C3%ADch-%C4%91i%E1%BB%83m/id1532715551?l=vi"><i
                                    class="fa fa-apple" style="font-size: 100px; color: #c2c2c2;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="main-btn float-right" href="javascript:void(0)" id="close-popup-register-voucher" title=""
               style="margin-top: 10px"
               data-ripple="">Đóng</a>
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
            <a class="main-btn float-right" href="javascript:void(0)" id="close-popup-detail-voucher" data-ripple="">Đóng</a>
        </div>
    </div>
</div>
<div class="d-none">
    <lable id="restaurant-voucher">{{$restaurant}}</lable>
    <lable id="brand-voucher">{{$brand}}</lable>
    <lable id="id-voucher">{{$voucher}}</lable>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./js/main.min.js"></script>
<script src="./js/jquery.downCount.js"></script>
<script src="./js/script.js"></script>
<script src="./js/voucher/index.js"></script>
</body>
</html>
