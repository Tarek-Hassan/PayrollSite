<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partener_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('postion');
            $table->text('review');
            $table->integer('rate');
            $table->boolean('is_published')->default(0);
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
        Schema::dropIfExists('partener_reviews');
    }
}
