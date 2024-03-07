$(function () {
    $(document).on('keypress', '#phone-register-voucher', function (e) {
        if (e.keyCode === 13) {
            registerVoucher();
        }
    });
    $('#open-popup-detail-voucher').on('click', function () {
        $('.popup-wraper7').addClass('active');
    });
    $('#close-popup-detail-voucher').on('click', function () {
        $('.popup-wraper7').removeClass('active');
    });
    $('#close-popup-register-voucher').on('click', function () {
        $('.popup-wraper5').removeClass('active');
    });
    dataVoucher();
});

function dataVoucher() {
    $('.wavy-wraper').removeClass('hidden');
    let restaurant = $('#restaurant-voucher').text(),
        brand = $('#brand-voucher').text(),
        voucher = $('#id-voucher').text();
    axios({
        method: 'get',
        url: 'voucher.data-voucher',
        params: {
            restaurant: restaurant,
            brand: brand,
            voucher: voucher,
        }
    }).then(function (res) {
        console.log(res);
        $('.wavy-wraper').addClass('hidden');
        if (res.data.status !== 200) {
            $('#form-register-voucher').html('<h1 id="name-voucher">' + 404 + '</h1>\n' +
                '<label style="font-size: 25px;color: #a35858;">Chương trình không tồn tại</label>');
        } else {
            let data = res.data.data;
            if (moment(data.to_date + ' ' + data.to_hour + ':00', 'DD/MM/YYYY HH:mm').valueOf() < moment().valueOf()) {
                $('#form-register-voucher').html('<h1 id="name-voucher">' + data.name + '</h1>\n' +
                    '<p>Đăng ký số điện thoại bên dưới để nhận được mã khuyến mãi 50% thức ăn từ nhà hàng</p>' +
                    '<label style="font-size: 25px;color: #a35858;">Chương trình đã kết thúc</label>');
            } else {
                $('#form-register-voucher').html('<h1>' + data.name + '</h1>' +
                    '<p>Đăng ký số điện thoại bên dưới để nhận được mã khuyến mãi 50% thức ăn từ nhà hàng</p>' +
                    '<ul class="countdown">' +
                    '<li><span id="day-count-down" class="days">00</span>' +
                    '<p class="days_ref"></p></li>' +
                    '<li><span id="hour-count-down" class="hours">00</span>' +
                    '<p class="hours_ref"></p></li>' +
                    '<li><span id="minute-count-down" class="minutes">00</span>' +
                    '<p class="minutes_ref"></p></li>' +
                    '<li><span id="second-count-down" class="seconds">00</span>' +
                    '<p class="seconds_ref"></p></li>' +
                    '</ul>' +
                    '<label style="font-size: 25px;color: #a35858;" class="d-none" id="label-register-voucher"></label></br>' +
                    '<div>' +
                    '<input type="text" placeholder="Nhập số điện thoại đăng ký" id="phone-register-voucher">' +
                    '<button type="button" onclick="registerVoucher()"><i class="fa fa-arrow-right"></i></button>' +
                    '</div>');
                let countDownDate = moment(data.to_date + ' ' + data.to_hour + ':00', 'DD/MM/YYYY HH:mm').valueOf();
                let x = setInterval(function () {
                    let now = new Date().getTime();
                    let distance = countDownDate - now;
                    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    $("#form-register-voucher #day-count-down").text(days + ' ngày');
                    $("#form-register-voucher #hour-count-down").text(hours + ' giờ');
                    $("#form-register-voucher #minute-count-down").text(minutes + ' phút');
                    $("#form-register-voucher #second-count-down").text(seconds + ' giây');
                    if (distance < 0) {
                        clearInterval(x);
                        $('#form-register-voucher').html('<p>Chương trình đã kết thúc</p>');
                    }
                }, 1000);
            }
        }
    })
}

function registerVoucher() {
    $('#label-register-voucher-hour').text('');
    $('#label-register-voucher').addClass('d-none');
    $('.wavy-wraper').removeClass('hidden');
    let restaurant = $('#restaurant-voucher').text(),
        brand = $('#brand-voucher').text(),
        voucher = $('#id-voucher').text(),
        phone = $('#phone-register-voucher').val();
    axios({
        method: 'post',
        url: 'voucher.register',
        data: {
            restaurant: restaurant,
            brand: brand,
            voucher: voucher,
            phone: phone,
        }
    }).then(function (res) {
        console.log(res);
        $('.wavy-wraper').addClass('hidden');
        if (res.data.status === 200) {
            $('.popup-wraper5').addClass('active');
            $('#phone-register-voucher').val('');
        } else {
            $('#label-register-voucher').text(res.data.message);
            $('#label-register-voucher').removeClass('d-none');
        }
    })
}
