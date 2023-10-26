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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('producto_ID');
            $table->string('nombre', 255,);
            $table->double('precio',null,null,true);
            $table->string('imagen',255)->nullable();
            $table->string('descripcion',255)->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
            $table->boolean('habilitado')->default(true);
            $timestamp = false;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
