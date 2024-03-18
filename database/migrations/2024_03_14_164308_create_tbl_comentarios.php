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
        Schema::create('tbl_comentarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_comentario',10);
            $table->integer('id_documento');
            $table->string('comentario',512);
            $table->timestampTz('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_comentarios');
    }
};
