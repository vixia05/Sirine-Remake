<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('np_user');
            $table->foreignId('id_seksi');
            $table->foreignId('id_unit');
            $table->foreignId('id_workstation');
            $table->string('nama');
            $table->string('contact')->nullable();
            $table->date('tgl_lahir')->nullabel();
            $table->text('alamat')->nullable();
            $table->string('foto')->default("default.jpg");
            $table->timestamps();


            // foreign key
            // $table->foreign('np_user')
            //       ->references('np')
            //       ->on('users')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade')
            //       ->constrained();

            // $table->foreign('id_seksi')
            //       ->references('id')
            //       ->on('seksi')
            //       ->onUpdate('cascade')
            //       ->onDelete('no action')
            //       ->constrained();

            // $table->foreign('id_unit')
            //       ->references('id')
            //       ->on('unit')
            //       ->onUpdate('cascade')
            //       ->onDelete('no action')
            //       ->constrained();

            // $table->foreign('id_workstation')
            //       ->references('id')
            //       ->on('workstation')
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
        Schema::dropIfExists('user_details');
    }
}
