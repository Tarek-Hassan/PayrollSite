<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class HomePage extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'home_pages';
    protected $fillable = [
        'main_banner_content_ar',
        'main_banner_content_en',
        'main_banner_link',
        'about_title_ar',
        'about_title_en',
        'about_header_ar',
        'about_header_en',
        'about_footer_ar',
        'about_footer_en',
        'years_exper',
        'expert_at_service',
        'why_first_link',
        'how_works_header_ar',
        'how_works_header_en',
        'how_works_Body_ar',
        'how_works_Body_en',
        'how_works_footer_ar',
        'how_works_footer_en',
        'featured_candidates_title_ar',
        'featured_candidates_title_en',
        'featured_candidates_content_ar',
        'featured_candidates_content_en',
        'job_applicants_title_ar',
        'job_applicants_title_en',
        'job_applicants_content_ar',
        'job_applicants_content_en',
        'partner_content_ar',
        'partner_content_en',
    ];
    //main_banner
    public function getMainBannerContentAttribute(){
        return $this->attributes['main_banner_content']    = app()->getLocale() == 'ar' ? $this->main_banner_content_ar : $this->main_banner_content_en;
    }
    //About
    public function getAboutTitleAttribute(){
        return $this->attributes['about_title']    = app()->getLocale() == 'ar' ? $this->about_title_ar : $this->about_title_en;
    }
    //About
    public function getAboutHeaderAttribute(){
        return $this->attributes['about_header']    = app()->getLocale() == 'ar' ? $this->about_header_ar : $this->about_header_en;
    }
    //About
    public function getAboutFooterAttribute(){
        return $this->attributes['about_footer']    = app()->getLocale() == 'ar' ? $this->about_footer_ar : $this->about_footer_en;
    }
    //how_works
    public function getHowWorksHeaderAttribute(){
        return $this->attributes['how_works_header']    = app()->getLocale() == 'ar' ? $this->how_works_header_ar : $this->how_works_header_en;
    }
    //how_works
    public function getHowWorksBodyAttribute(){
        return $this->attributes['how_works_Body']    = app()->getLocale() == 'ar' ? $this->how_works_Body_ar : $this->how_works_Body_en;
    }
    //how_works
    public function getHowWorksFooterAttribute(){
        return $this->attributes['how_works_footer']    = app()->getLocale() == 'ar' ? $this->how_works_footer_ar : $this->how_works_footer_en;
    }
    //featured_candidates
    public function getFeaturedCandidatesTitleAttribute(){
        return $this->attributes['featured_candidates_title']    = app()->getLocale() == 'ar' ? $this->featured_candidates_title_ar : $this->featured_candidates_title_en;
    }
    //featured_candidates
    public function getFeaturedCandidatesContentAttribute(){
        return $this->attributes['featured_candidates_content']    = app()->getLocale() == 'ar' ? $this->featured_candidates_content_ar : $this->featured_candidates_content_en;
    }
    //job_applicants
    public function getJobApplicantsTitleAttribute(){
        return $this->attributes['job_applicants_title']    = app()->getLocale() == 'ar' ? $this->job_applicants_title_ar : $this->job_applicants_title_en;
    }
    //job_applicants
    public function getJobApplicantsContentAttribute(){
        return $this->attributes['job_applicants_content']    = app()->getLocale() == 'ar' ? $this->job_applicants_content_ar : $this->job_applicants_content_en;
    }
    //partner_content
    public function getPartnerContentAttribute(){
        return $this->attributes['partner_content']    = app()->getLocale() == 'ar' ? $this->partner_content_ar : $this->partner_content_en;
    }
    

}
