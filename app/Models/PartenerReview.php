<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartenerReview extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table="partener_reviews";
    protected $fillable=[
        'name_ar','name_en','postion_ar','postion_en','review_ar','review_en','rate','is_published'
       
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function getNameAttribute()
    {
        return $this->attributes['name']    =   app()->getLocale() == 'ar' ? $this->name_ar : $this->name_en;
    }
    public function getPostionAttribute()
    {
        return $this->attributes['postion']    =   app()->getLocale() == 'ar' ? $this->postion_ar : $this->postion_en;
    }
    public function getReviewAttribute()
    {
        return $this->attributes['review']    =   app()->getLocale() == 'ar' ? $this->review_ar : $this->review_en;
    }

}
