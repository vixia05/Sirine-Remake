<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkstationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workstation', function (Blueprint $table) {
            $table->id();
            $table->string('workstation');
            $table->foreignId('id_unit');
            $table->timestamps();

            // foreign key
            $table->foreign('id_unit')
                  ->references('id')
                  ->on('unit')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
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
        Schema::dropIfExists('workstation');
    }
}
