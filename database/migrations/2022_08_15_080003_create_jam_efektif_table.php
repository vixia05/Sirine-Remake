<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamEfektifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_efektif', function (Blueprint $table) {
            $table->id();
            $table->integer('gilir');
            $table->integer('jam_efektif');
            $table->foreignId('id_unit');
            $table->integer('target');
            $table->timestamps();

            $table->foreign('id_unit')
                  ->references('id')
                  ->on('unit')
                  ->onUpdate('cascade')
                  ->onDelete('no action')
                  ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_efektif');
    }
}
