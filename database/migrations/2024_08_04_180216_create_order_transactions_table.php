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
        Schema::create('ordertransactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OrderID');
            $table->unsignedBigInteger('TransactionID');
            // Tambahkan kolom lain sesuai kebutuhan
            $table->timestamps();
        
            // Definisikan foreign key
            $table->foreign('OrderID')->references('id')->on('orders');
            $table->foreign('TransactionID')->references('id')->on('transactions');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_transactions');
    }
};
