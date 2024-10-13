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
        Schema::create('user_info', function (Blueprint $table) {
            $table->id('user_info_id');
            $table->unsignedBigInteger('user_id');  // Make sure user_id is an unsigned big integer
            $table->string('location');
            $table->string('dateofbirth');
            $table->string('image');
            $table->string('role');

            // Define the foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');

            $table->timestamps();  // Optional, if you want to track created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_info');
    }
};
