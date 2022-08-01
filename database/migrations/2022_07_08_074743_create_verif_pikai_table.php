<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifPikaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Qc_Pc', function (Blueprint $table) {
            $table->id();
            $table->string('np_user');
            $table->date('tgl_verif');
            $table->integer('jml_verif');
            $table->integer('jml_obc');
            $table->integer('target');
            $table->integer('lembur');
            $table->integer('izin');
            $table->string('keterangan');
            $table->integer('validation');
            $table->timestamps();

            // foreign key
            $table->foreign('np_user')
                  ->references('np')
                  ->on('users')
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
        Schema::dropIfExists('Qc_Pc');
    }
}
