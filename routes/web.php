<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;

Route::get('/', function () {
    return view('chat');
});

Route::post('/bot', [BotController::class, 'processUserQuery'])->name('bot.process');

