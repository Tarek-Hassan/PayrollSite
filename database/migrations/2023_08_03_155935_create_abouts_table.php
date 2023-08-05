<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('page_banner_content_en');
            $table->text('page_banner_content_ar');
            $table->date('page_banner_date');
            $table->integer('page_banner_read');

//
            $table->string('foundation_title_en');
            $table->string('foundation_title_ar');
            $table->longText('foundation_content_en');
            $table->longText('foundation_content_ar');

            $table->string('vision_title_en');
            $table->string('vision_title_ar');
            $table->longText('vision_content_en');
            $table->longText('vision_content_ar');

            $table->string('mission_title_en');
            $table->string('mission_title_ar');
            $table->longText('mission_content_en');
            $table->longText('mission_content_ar');

            $table->string('values_principles_title_en');
            $table->string('values_principles_title_ar');
            $table->longText('values_principles_content_en');
            $table->longText('values_principles_content_ar');

            $table->string('team_title_en');
            $table->string('team_title_ar');
            $table->longText('team_content_en');
            $table->longText('team_content_ar');
            
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
        Schema::dropIfExists('abouts');
    }
}
