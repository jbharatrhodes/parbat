<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('newsTitle');
            $table->integer('vdcInfo_id');
            $table->text('newsDesc')->nullable();
            $table->string('newsBy')->nullable();
            $table->integer('published')->nullable();
            $table->string('category_id');
            $table->integer('isLatest');
            $table->string('feature')->nullable();
            $table->string('feature_small')->nullable();
            $table->string('feature_medium')->nullable();
            $table->string('source')->nullable();
            $table->integer('isSlider');
            $table->timestamp('createdDate');
            $table->timestamp('created_at');
            $table->timestamps('updated_at');
            $table->integer('views');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
