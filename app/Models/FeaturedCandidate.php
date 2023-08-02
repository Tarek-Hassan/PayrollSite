<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class FeaturedCandidate extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'featured_candidates';
    protected $fillable = [
        'title_ar',
        'title_en',
        'content_ar',
        'content_en',
        'tag1_icon',
        'tag1_ar',
        'tag1_en',
        'tag2_icon',
        'tag2_ar',
        'tag2_en',
        'is_published'
    ];
    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function getTitleAttribute(){
        return $this->attributes['title']    = app()->getLocale() == 'ar' ? $this->title_ar : $this->title_en;
    }

    public function getContentAttribute(){
        return $this->attributes['content']    = app()->getLocale() == 'ar' ? $this->content_ar : $this->content_en;
    }

    public function getTag1Attribute(){
        return $this->attributes['tag1']    = app()->getLocale() == 'ar' ? $this->tag1_ar : $this->tag1_en;
    }

    public function getTag2Attribute(){
        return $this->attributes['tag2']    = app()->getLocale() == 'ar' ? $this->tag2_ar : $this->tag2_en;
    }


}
