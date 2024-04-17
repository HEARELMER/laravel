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
        Schema::create('sellers', function (Blueprint $table) {
            $table->integer('id_seller')-> unsigned();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('lastname_f');
            $table->string('lastname_m');
            $table->string ('num_dni',8) ;
            $table->string('phone',9);
            $table->string('email');
            $table->string('address');
            $table->string('birthdate');
            $table->timestamps();
            $table->foreign('id_seller') -> references('id_user') -> on('users') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
