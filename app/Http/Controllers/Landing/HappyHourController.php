<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HappyHourController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Nhận quà Ưu đãi giờ vàng';
        $brand = (int)$request->get('brand');
        if (!$brand) {
            $title = 'Techres';
            return view('welcome', compact('title'));
        }
        return view('happy_hour.index', compact('title', 'brand'));
    }

    public function data(Request $request)
    {
        $brand = (int)$request->get('brand');
        $method = 0;
        $convert_api = $this->convertApiTemplate('/api/public/restaurant-vouchers?restaurant_brand_id=' . $brand . '&restaurant_object_promotion_campaign_id=1');
        $api = $convert_api[0];
        $params = $convert_api[1];
        $body = null;
        $port = 8094;
        $config = $this->callApiGatewayTemplate($method, $api, $params, $body, $port);
        $config['config'] = [
            'api' => '/api/public/restaurant-vouchers?restaurant_brand_id=' . $brand . '&restaurant_object_promotion_campaign_id=1',
            'params' => $body,
        ];
        $gift = '';
        foreach ($config['data']['list'] as $db) {
            $condition = str_replace(',', '</li><li><i class="ti-check"></i>', $db['information']);
            $gift .= ' <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4" style="padding-right: 0 !important; width: 100%">
                        <div class="price-box">
                            <span class="bg-red">Voucher giảm giá</span>
                            <div class="pricings">
                                <h1>' . $db['discount_percent'] . '%</h1>
                                <ul class="price-features"><li><i class="ti-check"></i>' . $condition . '</li><li></ul>
                                <a class="main-btn register-button-happy-hour" href="javascript:void(0)"
                                   data-value="' . $db['id'] . '">Chọn</a>
                            </div>
                        </div>
                    </div>';
        }
        return [$gift, $config];
    }

    public function register(Request $request)
    {
        $brand = (int)$request->get('brand');
        $phone = $request->get('phone');
        $name = $request->get('name');
        $method = 1;
        $convert_api = $this->convertApiTemplate('/api/public/restaurant-pc-customer-registers/register');
        $api = $convert_api[0];
        $params = $convert_api[1];
        $body = [
            'restaurant_brand_id' => $brand,
            'customer_phone' => $phone,
            'customer_name' => $name,
            'restaurant_object_promotion_campaign_id' => 1, //hardcode
        ];
        $port = 8094;
        $config = $this->callApiGatewayTemplate($method, $api, $params, $body, $port);
        $config['config'] = [
            'api' => '/api/public/restaurant-pc-customer-registers/register',
            'params' => $body,
        ];
        return $config;
    }

    public function package(Request $request)
    {
        $id = (int)$request->get('id');
        $gift = $request->get('gift');
        $method = 1;
        $convert_api = $this->convertApiTemplate('/api/public/restaurant-pc-customer-registers/' . $id . '/update');
        $api = $convert_api[0];
        $params = $convert_api[1];
        $body = [
            'promotion_campaign_id' => 3,
            'restaurant_object_promotion_campaign_id' => 1,
            'restaurant_voucher_id' => $gift,
        ];
        $port = 8094;
        $config = $this->callApiGatewayTemplate($method, $api, $params, $body, $port);
        $config['config'] = [
            'api' => '/api/public/restaurant-pc-customer-registers/' . $id . '/update',
            'params' => $body,
        ];
        return $config;
    }
}
