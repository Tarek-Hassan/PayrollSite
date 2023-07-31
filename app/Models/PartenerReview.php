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
        'name','postion','review','rate','is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

}
