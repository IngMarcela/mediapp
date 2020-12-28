<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('interval', 0);
            $table->unsignedSmallInteger('repetition');
            $table->string('dose', 5);
            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine_users');
    }
}
