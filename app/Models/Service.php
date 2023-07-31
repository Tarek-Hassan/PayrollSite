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
        'title','description','slug','is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
