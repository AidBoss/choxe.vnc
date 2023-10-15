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
            $table->integer('gia');
            $table->string('mota');
            $table->string('hang');
            $table->string('namsx');
            $table->string('kmdadi');
            $table->string('nhienlieu');
            $table->string('xuatxu');
            $table->string('kieudang');
            $table->string('socho');
            $table->string('chuxe');
            $table->string('diachi');
            $table->string('list_anh');
            $table->integer('sochuxe')->default(0);
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
