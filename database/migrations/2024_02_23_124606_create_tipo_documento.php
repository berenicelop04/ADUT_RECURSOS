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
        Schema::create('tbl_tipo_documento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_tipo_documento',10);
            $table->string('tipo_documento',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tipo_documento');
    }
};
