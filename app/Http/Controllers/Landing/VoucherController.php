<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class VoucherController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Nhận quà Voucher';
        $restaurant = (int)$request->get('restaurant');
        $brand = (int)$request->get('brand');
        $voucher = (int)$request->get('voucher');
        if (!$voucher || !$restaurant || !$brand) {
            $title = 'Techres';
            return view('welcome', compact('title'));
        }
        return view('voucher.index', compact('title', 'restaurant', 'brand', 'voucher'));
    }

    public function dataVoucher(Request $request)
    {
        $restaurant = (int)$request->get('restaurant');
        $brand = (int)$request->get('brand');
        $voucher = (int)$request->get('voucher');
        $method = 0;
        $convert_api = $this->convertApiTemplate('/api/restaurant-promotion-campaign-menu-discount-vouchers/detail?restaurant_brand_id=' . $brand . '&restaurant_id=' . $restaurant . '&promotion_campaign_id=' . $voucher);
        $api = $convert_api[0];
        $params = $convert_api[1];
        $body = null;
        $port = 8082;
        $config = $this->callApiGatewayTemplate($method, $api, $params, $body, $port);
        $config['config'] = [
            'api' => '/api/restaurant-promotion-campaign-menu-discount-vouchers/detail?restaurant_brand_id=' . $brand . '&restaurant_id=' . $restaurant . '&promotion_campaign_id=' . $voucher,
            'params' => $body,
        ];
        return $config;
    }

    public function register(Request $request)
    {
        $restaurant = (int)$request->get('restaurant');
        $brand = (int)$request->get('brand');
        $voucher = (int)$request->get('voucher');
        $phone = $request->get('phone');
        $method = 1;
        $convert_api = $this->convertApiTemplate('/api/restaurant-vouchers/create');
        $api = $convert_api[0];
        $params = $convert_api[1];
        $body = [
            'restaurant_id' => $restaurant,
            'restaurant_brand_id' => $brand,
            'promotion_campaign_id' => $voucher,
            'phone' => $phone,
        ];
        $port = 8082;
        $config = $this->callApiGatewayTemplate($method, $api, $params, $body, $port);
        $config['config'] = [
            'api' => '/api/restaurant-vouchers/create',
            'params' => $body,
        ];
        return $config;
    }
}
