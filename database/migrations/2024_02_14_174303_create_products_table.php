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
            $table->String("name",200);
            $table->text('descripcion');
            $table->unsignedInteger('quantity');
            $table->double('sale_price');
            $table->double('purchase_price');
            $table->String("image");
            //ESTAS DOS SIGUEINTES SON PARA REFERENCIAR A LA LLAVE FORANEA EN UNA TABLA
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            //AQUI TERMINA PARA ;A LLAVE FORANEA 
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
