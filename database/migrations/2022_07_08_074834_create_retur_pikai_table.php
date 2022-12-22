<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturPikaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_pikai', function (Blueprint $table) {
            $table->id();
            $table->string('np_user');
            $table->date('tgl_ck3');
            $table->string('jenis');
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
            $table->integer('jml_retur')->default(0);
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
        Schema::dropIfExists('retur_pikai');
    }
}
