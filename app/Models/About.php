<?php

namespace App\Models;

use Carbon\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $table = 'abouts';
    protected $fillable = [
        'page_banner_content_en',
        'page_banner_content_ar',
        'page_banner_date',
        'page_banner_read',

        'foundation_title_en',
        'foundation_title_ar',
        'foundation_content_en',
        'foundation_content_ar',

        'vision_title_en',
        'vision_title_ar',
        'vision_content_en',
        'vision_content_ar',

        'mission_title_en',
        'mission_title_ar',
        'mission_content_en',
        'mission_content_ar',

        'values_principles_title_en',
        'values_principles_title_ar',
        'values_principles_content_en',
        'values_principles_content_ar',

        'team_title_en',
        'team_title_ar',
        'team_content_en',
        'team_content_ar',
        
    ];
    protected $casts = [
        'page_banner_date' => 'date',
    ];
    //getters

        public function getPageBannerContentAttribute(){
        return $this->attributes['page_banner_content']    = app()->getLocale() == 'ar' ? $this->page_banner_content_ar : $this->page_banner_content_en;
    }
    public function getFoundationTitleAttribute(){
        return $this->attributes['foundation_title']    = app()->getLocale() == 'ar' ? $this->foundation_title_ar : $this->foundation_title_en;
    }
    public function getFoundationContentAttribute(){
        return $this->attributes['foundation_content']    = app()->getLocale() == 'ar' ? $this->foundation_content_ar : $this->foundation_content_en;
    }
    public function getVisionTitleAttribute(){
        return $this->attributes['vision_title']    = app()->getLocale() == 'ar' ? $this->vision_title_ar : $this->vision_title_en;
    }
    public function getVisionContentAttribute(){
        return $this->attributes['vision_content']    = app()->getLocale() == 'ar' ? $this->vision_content_ar : $this->vision_content_en;
    }
    public function getMissionTitleAttribute(){
        return $this->attributes['mission_title']    = app()->getLocale() == 'ar' ? $this->mission_title_ar : $this->mission_title_en;
    }
    public function getMissionContentAttribute(){
        return $this->attributes['mission_content']    = app()->getLocale() == 'ar' ? $this->mission_content_ar : $this->mission_content_en;
    }
    public function getValuesPrinciplesTitleAttribute(){
        return $this->attributes['values_principles_title']    = app()->getLocale() == 'ar' ? $this->values_principles_title_ar : $this->values_principles_title_en;
    }

    public function getValuesPrinciplesContentAttribute(){
        return $this->attributes['values_principles_content']    = app()->getLocale() == 'ar' ? $this->values_principles_content_ar : $this->values_principles_content_en;
    }
    public function getTeamTitleAttribute(){
        return $this->attributes['team_title']    = app()->getLocale() == 'ar' ? $this->team_title_ar : $this->team_title_en;
    }
    public function getTeamContentAttribute(){
        return $this->attributes['team_content']    = app()->getLocale() == 'ar' ? $this->team_content_ar : $this->team_content_en;
    }

    public function getPageBannerDateAttribute($value)
    {
        $date = Carbon::parse($value);
                if(App::isLocale('ar')){
                    return $date->isoFormat('Do MMMM YYYY');
                }
        return $date->format('jS F Y');
    }





}
