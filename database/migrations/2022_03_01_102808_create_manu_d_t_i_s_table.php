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
        Schema::create('manu_d_t_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('setor');
            $table->string('manutencao');
            $table->string('prioridade');
            $table->string('local');
            $table->string('description');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manu_d_t_i_s');
    }
};
