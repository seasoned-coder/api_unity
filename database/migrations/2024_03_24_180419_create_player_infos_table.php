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
        Schema::create('PlayerInfo', function (Blueprint $table) {
            $table->id();
            $table->string('punPlayerId');
            $table->string('name');
            $table->integer('goldCoins')->default(0);
            $table->timestamp('firstLoggedIn')->nullable();
            $table->timestamp('lastLoggedIn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playerInfo');
        Schema::dropIfExists('PlayerInfo');
    }
};
