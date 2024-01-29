<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;
use OpenaI;
class apicontroller extends Controller
{
    /*private string $endpoint = "https://api.meaningcloud.com/summarization-1.0";
    private int $sentences = 5;*/
    public function resume(Request $request){
        $request->validate([
            "txt"=>"required|min:3"
        ]);
        $txt = $request->txt;
       $apiKey = getenv('API_KEY_OPEN');
        $client = OpenAI::client($apiKey);
       
        $result = $client->chat()->create([
            'model' => 'gpt-3.5-turbo-1106',
            'response_format' => ["type" => "json_object" ],
            'messages' => [
                ['role' => 'system', 'content' => 'I would like you to summarize the following text in the language of the text producing a JSON always returns an object with the name summary like the following {summary:"summary here"} you can only return the object in this form {summary:"summary here"} any other form is not allowed.'],
                ['role' => 'system', 'content' => "the only thing you know how to do is to summarize text. if your answer is not a summary based on a text, you don't answer anything."],
                ['role'=> 'user', 'content' => $txt],
            ],
        ]);

       return $result->choices[0]->message->content;

    }
}
