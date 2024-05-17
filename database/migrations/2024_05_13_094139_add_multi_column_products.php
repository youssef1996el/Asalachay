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
        Schema::table('products', function($table) {
            $table->string('featured')->nullable()->default(null);
            $table->string('trading')->nullable()->default(null);
            $table->string('bestdeals')->nullable()->default(null);
            $table->string('newproduct')->nullable()->default(null);
            $table->string('bestselling')->nullable()->default(null);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
