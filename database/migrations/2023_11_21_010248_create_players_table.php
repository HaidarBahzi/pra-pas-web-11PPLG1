<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->string('player_email');
            $table->string('player_password');
            $table->string('player_location');
            $table->string('player_aliases');
            $table->string('player_photo');
            $table->string('player_short_description');
            $table->string('player_description');
            $table->integer('player_game_library');
            $table->integer('player_level');
            $table->date('player_created');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
