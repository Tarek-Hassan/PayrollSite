<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayerType extends Model
{
    use HasFactory;
    public $table = 'layer_types';

    public function getNameAttribute()
    {
        return $this->attributes['name'] = app()->getLocale() == 'ar' ? $this->name_ar : $this->name_en;
    }
}
