<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('direccion',100);
            $table->string('telefono',20);
            $table->DATE('fecha_ingreso');
            $table->DATE('fecha_egreso');
            $table->integer('peso');
            $table->integer('altura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
};
