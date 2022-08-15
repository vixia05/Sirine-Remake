<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi', function (Blueprint $table) {
            $table->id();
            $table->string('np_kasek')->nullable();
            $table->string('np_kaun')->nullable();
            $table->string('np_user')->nullable();
            $table->text('eva_kasek')
                  ->nullable();

            $table->text('eva_kaun')
                  ->nullable();

            $table->text('response')
                  ->nullable();

            $table->date('post_date')
                  ->default(now());

            $table->date('response_date')
                  ->nullable();

            $table->timestamps();


            // Foreign Key
            $table->foreign('np_kasek')
                  ->references('np')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('no action')
                  ->constrained();

            $table->foreign('np_kaun')
                  ->references('np')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('no action')
                  ->constrained();

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
        Schema::dropIfExists('evaluasi');
    }
}
