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
            $table->string('nama_user');
            $table->date('tgl_verif');
            $table->integer('jml_verif')->nullable()->default(0);
            $table->integer('jml_obc')->nullable()->default(0);
            $table->integer('target')->default(30);
            $table->integer('lembur')->nullable()->default(0);
            $table->integer('izin')->nullable()->default(0);
            $table->string('keterangan')->nullable()->default("-");
            $table->integer('id_station');
            $table->string('jenis')->nullable()->default("PCHT");
            $table->integer('validation')->default(0);
            $table->timestamps();

            // // foreign key
            // $table->foreign('np_user')
            //       ->references('np')
            //       ->on('users')
            //       ->onUpdate('cascade')
            //       ->onDelete('no action')
            //       ->constrained();
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
