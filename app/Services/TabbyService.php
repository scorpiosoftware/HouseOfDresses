<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
class TabbyService
{
    public $base_url = "https://api.tabby.ai/api/v2/";
    public $pk_test = "pk_test_XXXXXX-XXX-XXXX-XXX-XXXXXXXXXXXXXX";
    public $sk_test = "sk_test_XXXXXX-XXX-XXXX-XXX-XXXXXXXXXXXXXXX";
    public function createSession($data)
    {
        $body = $this->getConfig($data);

        $http = Http::withToken($this->pk_test)->baseUrl($this->base_url);

        $response = $http->post('checkout',$body);

        return $response->object();
    }
    public function getSession($payment_id)
    {
        $http = Http::withToken($this->sk_test)->baseUrl($this->base_url);

        $url = 'checkout/'.$payment_id;

        $response = $http->get($url);

        return $response->object();
    }
    public function getConfig($data)
    {
        $body= [];

        $body = [
            "payment" => [
                "amount" => $data['amount'],
                "currency" => $data['currency'],
                "description" =>  $data['description'],
                "buyer" => [
                    "phone" => $data['buyer_phone'],
                    "email" => $data['buyer_email'],
                    "name" => $data['full_name']
                ],
                "shipping_address" => [
                    "city" => $data['city'],
                    "address" =>  $data['address'],
                    "zip" => $data['zip'],
                ],
                "order" => [
                    "tax_amount" => "0.00",
                    "shipping_amount" => "0.00",
                    "discount_amount" => "0.00",
                    "updated_at" => now(),
                    "reference_id" => $data['order_id'],
                    "items" => 
                        $data['items']
                    ,
                ],
                "buyer_history" => [
                    "registered_since"=> $data['registered_since'],
                    "loyalty_level"=> $data['loyalty_level'],
                ],
            ],
            "lang" => app()->getLocale(),
            "merchant_code" => "your merchant_code",
            "merchant_urls" => [
                "success" => $data['success-url'],
                "cancel" => $data['cancel-url'],
                "failure" => $data['failure-url'],
            ]
        ];

        return $body;
    }
}
