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
        Schema::create('user_forms', function (Blueprint $table) {
            /* $table->string('name', length: 100); -> VARCHAR */
            $table->id();
            $table->timestamps();
            $table->string('name', length: 255);
            $table->string('last_name', length: 255);
            $table->tinyInteger('age');
            $table->string('gender', length: 10);
            $table->string('country_residence', length: 100);
            $table->string('country_nationality', length: 100);
            $table->string('theme', length: 255);
            $table->string('email', length: 255);
            $table->string('password', length: 255);
            $table->string('phone_number', length: 15);
            $table->string('observation', length: 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_forms');
    }
};
