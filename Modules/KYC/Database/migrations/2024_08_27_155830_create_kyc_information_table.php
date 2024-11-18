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
        Schema::create('kyc_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kyc_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('file')->nullable();
            $table->text('message')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kyc_information');
    }
};
