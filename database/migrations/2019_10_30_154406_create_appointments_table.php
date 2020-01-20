<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('descr');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('dienstverlener_id');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();

            // Foreign keys
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('dienstverlener_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
