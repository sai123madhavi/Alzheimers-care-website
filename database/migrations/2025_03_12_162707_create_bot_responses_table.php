<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bot_responses', function (Blueprint $table) {
            $table->id();
            $table->string('user_input'); // Store user query
            $table->text('bot_reply');    // Store predefined bot response
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bot_responses');
    }
};

