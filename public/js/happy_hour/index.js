let idRegisterHappyHour;
$(function () {
    if (window.innerWidth > window.innerHeight) {
        $('#background-happy-hour').removeClass('background-voucher2');
        $('#background-happy-hour').addClass('background-voucher1');
        $('#div-input-voucher-promotion').html(' <input class="col-lg-5" type="text" placeholder="Số điện thoại"\n' +
            '                                   id="phone-register-happy-hour"\n' +
            '                                   style="background-color: #fff">\n' +
            '                            <input class="col-lg-5" type="text" placeholder="Tên của bạn"\n' +
            '                                   id="name-register-happy-hour"\n' +
            '                                   style="background-color: #fff; margin-top: 10px">\n' +
            '                            <button class="col-lg-2" type="button" onclick="registerHappyHour()"\n' +
            '                                    style="float: none!important; font-size: 20px;margin-top: 10px; height: -webkit-fill-available; right: auto; margin-left: 5px">\n' +
            '                                Đăng ký\n' +
            '                            </button>');
    } else {
        $('#background-happy-hour').removeClass('background-voucher1');
        $('#background-happy-hour').addClass('background-voucher2');
        $('#div-input-voucher-promotion').html(' <input class="col-lg-8" type="text" placeholder="Số điện thoại"\n' +
            '                                   id="phone-register-happy-hour"\n' +
            '                                   style="background-color: #fff; font-size: 15px !important; width: 80%">\n' +
            '                            <input class="col-lg-8" type="text" placeholder="Tên của bạn"\n' +
            '                                   id="name-register-happy-hour"\n' +
            '                                   style="background-color: #fff; margin-top: 10px; font-size: 15px !important; width: 80%">\n' +
            '                            <button class="col-lg-2" type="button" onclick="registerHappyHour()"\n' +
            '                                    style="float: none!important; font-size: 20px;margin-top: 10px; right: 0; margin-left: 5px; position: inherit; width: 80%">\n' +
            '                                Đăng ký\n' +
            '                            </button>');
    }
    $(window).on('resize', function () {
        if (window.innerWidth > window.innerHeight) {
            $('#background-happy-hour').removeClass('background-voucher2');
            $('#background-happy-hour').addClass('background-voucher1');
            $('#div-input-voucher-promotion').html(' <input class="col-lg-5" type="text" placeholder="Số điện thoại"\n' +
                '                                   id="phone-register-happy-hour"\n' +
                '                                   style="background-color: #fff">\n' +
                '                            <input class="col-lg-5" type="text" placeholder="Tên của bạn"\n' +
                '                                   id="name-register-happy-hour"\n' +
                '                                   style="background-color: #fff; margin-top: 10px">\n' +
                '                            <button class="col-lg-2" type="button" onclick="registerHappyHour()"\n' +
                '                                    style="float: none!important; font-size: 20px;margin-top: 10px; height: -webkit-fill-available; right: auto; margin-left: 5px">\n' +
                '                                Đăng ký\n' +
                '                            </button>');
        } else {
            $('#background-happy-hour').removeClass('background-voucher1');
            $('#background-happy-hour').addClass('background-voucher2');
            $('#div-input-voucher-promotion').html(' <input class="col-lg-8" type="text" placeholder="Số điện thoại"\n' +
                '                                   id="phone-register-happy-hour"\n' +
                '                                   style="background-color: #fff; font-size: 15px !important; width: 80%">\n' +
                '                            <input class="col-lg-8" type="text" placeholder="Tên của bạn"\n' +
                '                                   id="name-register-happy-hour"\n' +
                '                                   style="background-color: #fff; margin-top: 10px; font-size: 15px !important; width: 80%">\n' +
                '                            <button class="col-lg-2" type="button" onclick="registerHappyHour()"\n' +
                '                                    style="float: none!important; font-size: 20px;margin-top: 10px; right: 0; margin-left: 5px; position: inherit; width: 80%">\n' +
                '                                Đăng ký\n' +
                '                            </button>');
        }
    });
    // $(document).on('keypress', '#phone-register-happy-hour', function (e) {
    //     if (e.keyCode === 13) {
    //         registerHappyHour();
    //     }
    // });
    $('#open-popup-detail-happy-hour').on('click', function () {
        $('.popup-wraper7').addClass('active');
    });
    $('#close-popup-detail-happy-hour').on('click', function () {
        $('.popup-wraper7').removeClass('active');
    });
    $('#close-popup-register-happy-hour').on('click', function () {
        $('.popup-wraper5').removeClass('active');
    });
    $(document).on('click', '.register-button-happy-hour', function () {
        $('#data-gift-happy-hour-promotion .register-button-happy-hour').removeClass('button-focus-happy-hour');
        $('#data-gift-happy-hour-promotion .register-button-happy-hour').text('Chọn');
        $(this).addClass('button-focus-happy-hour');
        $(this).text('Đã chọn');
    });
    $('#phone-register-happy-hour, #name-register-happy-hour').on('input', function () {
        $('#label-register-happy-hour').text('');
        $('#label-register-happy-hour').addClass('d-none');
    });
});

async function dataHappyHour() {
    $('.wavy-wraper').removeClass('hidden');
    let brand = $('#brand-happy-hour').text();
    axios({
        method: 'get',
        url: 'happy-hour.data',
        params: {
            brand: brand,
        }
    }).then(function (res) {
        console.log(res);
        $('.wavy-wraper').addClass('hidden');
        if (res.data[1].status === 200) {
            $('#data-gift-happy-hour-promotion').html(res.data[0]);
        } else {
            $('#data-gift-happy-hour-promotion').html('Chưa có khuyến mãi !');
        }
    });
}

function registerHappyHour() {
    $('.register-button-happy-hour').removeClass('button-focus-happy-hour');
    $('.register-button-happy-hour').text('Chọn');
    $('#label-register-happy-hour').text('');
    $('#label-register-happy-hour').addClass('d-none');
    $('.wavy-wraper').removeClass('hidden');
    let brand = $('#brand-happy-hour').text(),
        phone = $('#phone-register-happy-hour').val(),
        name = $('#name-register-happy-hour').val();
    if (phone === '' || name === '') {
        $('#label-register-happy-hour').text('Vui lòng nhập đầy đủ Số điện thoại và Tên');
        $('#label-register-happy-hour').removeClass('d-none');
        return false;
    }
    axios({
        method: 'post',
        url: 'happy-hour.register',
        data: {
            brand: brand,
            phone: phone,
            name: name,
        }
    }).then(async function (res) {
        console.log(res);
        $('.wavy-wraper').addClass('hidden');
        if (res.data.status === 200) {
            await dataHappyHour();
            brandRegisterHappyHour = brand;
            idRegisterHappyHour = res.data.data.id;
            $('.popup-wraper5').addClass('active');
            $('#phone-register-happy-hour').val('');
            $('#name-register-happy-hour').val('');
        } else {
            $('.popup-wraper7').removeClass('active');
            $('#label-register-happy-hour').text(res.data.message);
            $('#label-register-happy-hour').removeClass('d-none');
        }
    })
}

function packageHappyHour() {
    $('#label-register-happy-hour').text('');
    $('#label-register-happy-hour').addClass('d-none');
    $('.wavy-wraper').removeClass('hidden');
    let gift = $('#data-gift-happy-hour-promotion .button-focus-happy-hour').data('value');
    if (gift === undefined) return false;
    axios({
        method: 'post',
        url: 'happy-hour.package',
        data: {
            id: idRegisterHappyHour,
            gift: gift,
        }
    }).then(function (res) {
        console.log(res);
        $('.wavy-wraper').addClass('hidden');
        if (res.data.status === 200) {
            $('.popup-wraper5').removeClass('active');
            $('#myModalsmall').modal('show');
        }
    })
}
