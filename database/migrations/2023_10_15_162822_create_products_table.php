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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('loai');
            $table->string('category_id');
            $table->string('gia');
            $table->string('hang');
            $table->string('nhienlieu');
            $table->string('kmdadi');
            $table->string('xuatxu');
            $table->string('namsx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
