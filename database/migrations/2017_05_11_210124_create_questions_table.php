<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->text('question');
			$table->text('c0');
			$table->text('c1');
			$table->text('c2')->nullable();
			$table->text('c3')->nullable();
			$table->boolean('a0')->default(0));
			$table->boolean('a1')->default(0);
			$table->boolean('a2')->nullable();
			$table->boolean('a3')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
