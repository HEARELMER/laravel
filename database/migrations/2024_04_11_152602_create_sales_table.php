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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id_sale');
            $table->integer('id_seller') -> unsigned();
            $table->integer('id_client') -> unsigned();
            $table->date('date_sale');//falta aun
            $table->double('amount');//falta aun
            $table->foreign('id_seller') -> references ('id_seller') -> on ('sellers') -> onDelete ('cascade');
            $table->foreign('id_client') -> references ('id_client') -> on ('clients') -> onDelete ('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
