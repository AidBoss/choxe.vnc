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
            $table->int('category_id');
            $table->string('gia');
            $table->string('nhienlieu');
            $table->string('anh');
            $table->string('mota');
            $table->string('kmdadi');
            $table->string('hopso');
            $table->string('xuatxu');
            $table->string('namsx');
            $table->string('socho');
            $table->string('chuxe');
            $table->string('sochuxe');
            $table->string('diachi');
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
