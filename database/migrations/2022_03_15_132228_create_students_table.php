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
            $table->string('reg_number',14)->primary();
            $table->string('fullname',90);
            $table->string('password',30);
            $table->string('gender',6);
            $table->string('email',30);
            $table->string('phone_number',10);
            $table->string('sec_qn',30);
            $table->string('sec_answer',30);
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
