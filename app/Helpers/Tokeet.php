<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;

class Tokeet
{
    /**
     * Tokeet constructor.
     */
    public function __construct()
    {
    
    }
    public static function getAllTasks()
    {
        $client = new Client();
        $request = new Request(
            "get",
            "http://capi.tokeet.com/v1/task?account=1499700995.4461",
           ["Content-Type" => "application/json; charset=utf-8",
            'Authorization' => '0aad3f53-e918-4ea5-b1fc-08a72670bc9e'
                    ]
            );
        $response = $client->send($request);
        $body = $response->getBody();
        return json_decode($body->getContents(), true);
    }

}