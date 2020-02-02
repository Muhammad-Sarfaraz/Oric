<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('password')->nullable();
            $table->string('year')->nullable();
            $table->string('religion')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('teacherid')->nullable();
            $table->string('nid')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('institute')->nullable();
            $table->string('subject')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('emergencycontact')->nullable();
            $table->text('note')->nullable();
            $table->text('pressentaddress')->nullable();
            $table->text('permanentaddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
