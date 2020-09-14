<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("question_id");
            $table->foreignId("profile_id");
            $table->string('content',45);
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('question_id')->references('id')->on('questions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers', function (Blueprint $table) {
            $table->dropForeign('answers_profile_id_foreign');
            $table->dropForeign('answers_question_id_foreign');
        });
    }
}
