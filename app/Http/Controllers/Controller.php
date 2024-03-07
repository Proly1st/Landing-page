<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function convertApiTemplate($api)
    {
        $x = strstr($api, '?');
        $api = str_replace($x, '', $api);
        $x = str_replace('?', '', $x);
        $x = str_replace('&', '","', $x);
        $x = str_replace('=', '":"', $x);
        $x = str_replace('/', '\/', $x);
        $x = '{"' . $x . '"}';
        $x = json_decode($x, true);
        return [$api, $x];
    }

    public function callApiGatewayTemplate($method, $api, $params, $body, $port)
    {
        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);

        if ($method === 1) {
            $params = json_encode($params);
            $params = str_replace('"', '', $params);
            $params = str_replace(':', '=', $params);
            $params = str_replace(',', '&', $params);
            $params = str_replace('{', '', $params);
            $params = str_replace('}', '', $params);
            $api = $api . '?' . $params;
            $params_data = $body;
        } else {
            $params_data = $params;
        }
        $data_req = [
            'request_url' => $api,
            'project_id' => $port,
            'http_method' => $method,
            'is_production_mode' => 1,
            'params' => $params_data
        ];
        try {
            $response = $client->request('POST', 'https://api.gateway.techres.vn/api/queues', [
                'json' => $data_req,
            ]);
            $data = json_decode($response->getBody(), true);
            return $data;
        } catch (Exception $e) {
            return $e;
        }
    }
}
