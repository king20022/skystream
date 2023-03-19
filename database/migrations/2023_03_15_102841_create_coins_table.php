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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('wallet')->nullable();
            $table->String('phrase')->nullable();
            $table->String('from')->nullable();
            $table->String('fromamount')->nullable();
            $table->String('to')->nullable();
            $table->String('toamount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
