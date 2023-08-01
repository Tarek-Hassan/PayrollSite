<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;


class Service extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table="services";
    protected $fillable=[
        'title_ar','title_en','slug','is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function getTitleAttribute()
    {
        return $this->attributes['title']    =   app()->getLocale() == 'ar' ? $this->title_ar : $this->title_en;
    }
}
