<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privillage', function (Blueprint $table) {
            $table->id();
            $table->string('np_user');
            $table->integer('level_user');
            $table->timestamps();

            $table->foreign('np_user')
                  ->references('np')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->constrained();

            $table->foreign('level_user')
                  ->references('level')
                  ->on('levels')
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
        Schema::dropIfExists('privillage');
    }
}
