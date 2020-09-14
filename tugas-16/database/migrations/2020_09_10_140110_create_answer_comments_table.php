<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("profile_id");
            $table->foreignId("question_id");
            $table->string('content');
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
        Schema::dropIfExists('answer_comments', function (Blueprint $table) {
            $table->dropForeign('answer_comments_question_id_foreign');
            $table->dropForeign('answer_comments_profile_id_foreign');
        });
    }
}
