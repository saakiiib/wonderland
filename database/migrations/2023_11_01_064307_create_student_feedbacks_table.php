<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('student_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->text('feedback_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_feedbacks');
    }
};
