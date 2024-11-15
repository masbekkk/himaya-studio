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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->date('date_books');
            $table->string('duration');
            $table->string('price');
            $table->text('add_on')->nullable();
            $table->string('start_time');
            $table->string('end_time');
            $table->string('details')->nullable();
            $table->string('booker_name');
            $table->string('booker_email');
            $table->string('booker_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
