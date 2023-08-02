<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->text('content_ar');
            $table->text('content_en');
            $table->string('tag1_icon');
            $table->string('tag1_ar');
            $table->string('tag1_en');
            $table->string('tag2_icon');
            $table->string('tag2_ar');
            $table->string('tag2_en');
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
        Schema::dropIfExists('featured_candidates');
    }
}
