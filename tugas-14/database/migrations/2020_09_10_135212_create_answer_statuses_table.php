<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("question_id");
            $table->foreignId("profile_id");
            $table->integer('point');
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('profile_id')->references('id')->on('profiles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_statuses', function (Blueprint $table) {
            $table->dropForeign('answer_statuses_question_id_foreign');
            $table->dropForeign('answer_statuses_profile_id_foreign');
        });
    }
}
