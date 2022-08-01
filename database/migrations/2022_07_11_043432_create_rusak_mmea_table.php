<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRusakMmeaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcts_mmea', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_po')->unique();
            $table->integer('blobor')->nullable();
            $table->integer('botak')->nullable();
            $table->integer('blur')->nullable();
            $table->integer('robek')->nullable();
            $table->integer('gradasi')->nullable();
            $table->integer('hologram')->nullable();
            $table->integer('miss_reg')->nullable();
            $table->integer('noda')->nullable();
            $table->integer('sablon')->nullable();
            $table->integer('spec')->nullable();
            $table->integer('tercampur')->nullable();
            $table->integer('diecut')->nullable();
            $table->integer('tipis')->nullable();
            $table->integer('zig-zag')->nullable();
            $table->integer('terkelupas')->nullable();
            $table->integer('rusak_mesin')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('no_po')
                  ->references('no_po')
                  ->on('order_mmea')
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
        Schema::dropIfExists('hcts_mmea');
    }
}
