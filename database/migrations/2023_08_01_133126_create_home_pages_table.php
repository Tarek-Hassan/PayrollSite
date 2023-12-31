<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            //main_banner
            $table->text('main_banner_content_ar');
            $table->text('main_banner_content_en');
            $table->string('main_banner_link')->nullable();
            //About
            $table->string('about_title_ar');
            $table->string('about_title_en');
            $table->text('about_header_ar');
            $table->text('about_header_en');
            $table->text('about_footer_ar');
            $table->text('about_footer_en');
            $table->integer('years_exper');
            $table->integer('expert_at_service');
            //Why First
            $table->string('why_first_link')->nullable();
            //How it works
            $table->text('how_works_header_ar');
            $table->text('how_works_header_en');
            $table->text('how_works_Body_ar');
            $table->text('how_works_Body_en');
            $table->text('how_works_footer_ar');
            $table->text('how_works_footer_en');
            //Employeer featured-candidates
            $table->string('featured_candidates_title_ar');
            $table->string('featured_candidates_title_en');
            $table->text('featured_candidates_content_ar');
            $table->text('featured_candidates_content_en');
            //Job Applicants
            $table->string('job_applicants_title_ar');
            $table->string('job_applicants_title_en');
            $table->text('job_applicants_content_ar');
            $table->text('job_applicants_content_en');
            //partner-content
            $table->text('partner_content_ar');
            $table->text('partner_content_en');
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
        Schema::dropIfExists('home_pages');
    }
}
