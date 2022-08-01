<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMmeaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_mmea', function (Blueprint $table) {

            $table->bigInteger('no_po')->unique();
            $table->string('no_obc');
            $table->string('jenis');
            $table->date('tgl_obc')  ->nullable();
            $table->date('tgl_jt')   ->nullable();
            $table->date('tgl_bb')   ->nullable();
            $table->date('tgl_cetak')->nullable();
            $table->date('tgl_qc')   ->nullable();
            $table->date('tgl_kemas')->nullable();
            $table->integer('jml_order');
            $table->integer('rencet')->nullable();
            $table->integer('jml_bb')->nullable();
            $table->integer('jml_cd')->nullable();
            $table->integer('total_cd')->nullable();
            $table->integer('jml_cetak')->nullable();
            $table->integer('hcs_qc')->nullable();
            $table->integer('hcts_qc')->nullable();
            $table->integer('hcs_sisa')->nullable();
            $table->integer('total_hcts')->nullable();
            $table->integer('kemas')->nullable();
            $table->integer('kirim')->nullable();
            $table->string('status')->nullable()->default('-');
            $table->string('mesin')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('mesin')
                  ->references('serial')
                  ->on('mesin')
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
        Schema::dropIfExists('order_mmea');
    }
}
