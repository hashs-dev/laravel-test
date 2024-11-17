<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Otomatik artan ID
            $table->string('name'); // Ürün adı
            $table->text('description'); // Ürün açıklaması
            $table->decimal('price', 8, 2); // Ürün fiyatı
            $table->timestamps(); // created_at ve updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};