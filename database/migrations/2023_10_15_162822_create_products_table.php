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
            $table->string('name');
            $table->string('category');
            $table->string('category_id');
            $table->integer('price');
            $table->string('painted');
            $table->string('company');
            $table->string('yom');
            $table->string('kmdadi');
            $table->string('nhienlieu');
            $table->string('fuel');
            $table->string('origin');
            $table->string('designs');
            $table->string('TenLienHe');
            $table->integer('phone')->default(0);
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
