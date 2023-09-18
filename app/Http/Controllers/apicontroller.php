<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;

class apicontroller extends Controller
{
    private string $endpoint = "https://api.meaningcloud.com/summarization-1.0";
    private int $sentences = 5;
    public function resume(Request $request){
        $request->validate([
            "txt"=>"required|min:3"
        ]);
        $txt = $request->txt;
       
        $client = new GuzzleHttp\Client();

        $response = $client->post($this->endpoint, [
            'multipart' => [
                [
                    'name'     => 'key',
                    'contents' => env("API_KEY")
                ],
                [
                    'name'     => 'txt',
                    'contents' => $txt
                ],
                [
                    'name'     => 'sentences',
                    'contents' => $this->sentences
                ]
            ]
        ]);
  
        return $response->getBody()->getContents();
    }
}
