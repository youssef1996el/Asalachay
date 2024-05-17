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
        Schema::create('ligneorders', function (Blueprint $table) {
            $table->id();
            $table->integer('qte')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->decimal('total',10,2)->nullable();
            $table->foreignId("idorders")->references('id')->on('orders')->onDelete('cascade');
            $table->foreignId("idproduct")->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligneorders');
    }
};
