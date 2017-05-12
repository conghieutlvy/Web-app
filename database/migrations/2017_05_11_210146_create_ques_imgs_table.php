<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuesImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ques_imgs', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->text('question');
			$table->string('namg_img');
			$table->text('c0');
			$table->text('c1');
			$table->text('c2')->nullable();
			$table->text('c3')->nullable();
			$table->boolean('a0');
			$table->boolean('a1');
			$table->boolean('a2')->nullable();
			$table->boolean('a3')->nullable();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('ques_imgs');
    }
}
