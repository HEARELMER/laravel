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
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->integer('id_sale')-> unsigned();
            $table->integer('id_package')-> unsigned();
            $table->double('amount');
            $table->double('price');
            $table->double('discount');
            $table->double('partial_amount');

            $table->foreign('id_sale') -> references('id_sale') -> on('sales') -> onDelete('cascade');
            $table->foreign('id_package') -> references('id_package') -> on('tourist_packages') -> onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sales');
    }
};
