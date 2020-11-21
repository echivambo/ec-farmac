<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacias', function (Blueprint $table) {
            $table->id();
            $table->string('nome',60);
            $table->string('endereco');
            $table->decimal('latitude', 8, 6);
            $table->decimal('longitude', 9, 6);
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
        Schema::dropIfExists('farmacias');
    }
}
