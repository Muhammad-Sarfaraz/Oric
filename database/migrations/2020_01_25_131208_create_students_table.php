<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('password')->nullable();
            $table->string('religion')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('studentid')->nullable();
            $table->string('birth')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('fatherphone')->nullable();
            $table->string('motherphone')->nullable();
            $table->string('localgurdian')->nullable();
            $table->string('gurdianphone')->nullable();
            $table->string('note')->nullable();
            $table->string('pressentaddress')->nullable();
            $table->string('permanentaddress')->nullable();
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
        Schema::dropIfExists('students');
    }
}
