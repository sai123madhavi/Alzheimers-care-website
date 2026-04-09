<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQuery;
use App\Models\BotResponse;

class BotController extends Controller
{
    public function processUserQuery(Request $request)
    {
        $userInput = $request->input('user_input');

        // Save user input to database
        $userQuery = UserQuery::create(['user_input' => $userInput]);

        // Check if a predefined bot response exists
        $botResponse = BotResponse::where('user_input', $userInput)->first();

        if ($botResponse) {
            $reply = $botResponse->bot_reply;
        } else {
            $reply = "I'm sorry, I don't understand. Can you rephrase?";
        }

        return response()->json(['reply' => $reply]);
    }
}

