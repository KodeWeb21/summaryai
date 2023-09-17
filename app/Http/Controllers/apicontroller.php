<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;

class apicontroller extends Controller
{
    private string $endpoint = "https://api.meaningcloud.com/summarization-1.0";
    private string $key = "939e51e11692e4e2e59cc789835dd407";
    public function resume(Request $request){
        $request->validate([
            "txt"=>"required|min:3"
        ]);
        $txt = $request->txt;
       
        $client = new GuzzleHttp\Client();

        $response = $client->post('https://api.meaningcloud.com/summarization-1.0', [
            'multipart' => [
                [
                    'name'     => 'key',
                    'contents' => '939e51e11692e4e2e59cc789835dd407'
                ],
                [
                    'name'     => 'txt',
                    'contents' => $txt
                ],
                [
                    'name'     => 'sentences',
                    'contents' => 5
                ]
            ]
        ]);
  
        return $response->getBody()->getContents();
    }
}
