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
        Schema::create('tbl_listas_distribucion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_lista',10);
            $table->string('nombre_lista',60);
            $table->integer('cantidad_archivos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_listas_distribucion');
    }
};
