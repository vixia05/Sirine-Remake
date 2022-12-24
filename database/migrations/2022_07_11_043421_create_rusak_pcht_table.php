<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRusakPchtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcts_pcht', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('po_hcts')->unique();
            $table->string('petugas1','4');
            $table->string('petugas2','4')->nullable();
            $table->date('tgl_verif')->default(today());
            $table->integer('blobor')->default(0);
            $table->integer('blanko')->default(0);
            $table->integer('blur')->default(0);
            $table->integer('botak')->default(0);
            $table->integer('diecut')->default(0);
            $table->integer('gradasi')->default(0);
            $table->integer('hologram')->default(0);
            $table->integer('miss_reg')->default(0);
            $table->integer('minyak')->default(0);
            $table->integer('noda')->default(0);
            $table->integer('plooi')->default(0);
            $table->integer('sobek')->default(0);
            $table->integer('tercampur')->default(0);
            $table->integer('terpotong')->default(0);
            $table->integer('tipis')->default(0);
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('no_po')
                  ->references('no_po')
                  ->on('order_pcht')
                  ->onUpdate('cascade')
                  ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hcts_pcht');
    }
}
