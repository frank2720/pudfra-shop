<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;

class Payment
{
    public $access_token;
    public function __construct($consumerKey,$consumerSecret,$auth_url)
    {
        $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($auth_url);
        $this->access_token = $response['access_token'];
    }

    public function authorization()
    {
        return $this->access_token;
    }
}
