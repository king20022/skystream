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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role',['investor','admin'])->default('investor')->after('email');
            $table->string('image')->nullable()->after('email');
            $table->string('number')->nullable()->after('email');
            $table->string('address')->nullable()->after('email');
            $table->string('bonus')->nullable()->after('email');
            $table->string('balance')->nullable()->after('email');
            $table->string('profit')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role','image','number','address','bonus','balance','profit');
        });
    }
};
