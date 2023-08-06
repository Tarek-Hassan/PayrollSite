<?php

namespace App\Models;

use App\Models\IncomeTaxLayer;
use App\Models\IncomeTaxLayerSlice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncomeTax extends Model
{
    use HasFactory;
    protected $table = 'income_taxes';
    protected $fillable = ['name_ar', 'name_en','personal_exemption'];



    public function getNameAttribute()
    {
        return $this->attributes['name'] = app()->getLocale() == 'ar' ? $this->name_ar : $this->name_en;
    }

    public function incomeTaxLayer() {
        return $this->hasMany(IncomeTaxLayer::class,'income_tax_id','id');
    }
    public function incomeTaxLayerSlice() {
        return $this->hasMany(IncomeTaxLayerSlice::class,'income_tax_id');
    }
}
