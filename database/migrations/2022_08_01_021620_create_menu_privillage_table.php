<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPrivillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_privillage', function (Blueprint $table) {
            $table->id();
            $table->string('np_user');
            $table->foreignId('id_menu');
            $table->timestamps();

            // Foreign Key
            $table->foreign('np_user')
                ->references('np')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->constrained();

            $table->foreign('id_menu')
                ->references('id')
                ->on('menu')
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
        Schema::dropIfExists('menu_privillage');
    }
}
