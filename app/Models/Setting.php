<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table="settings";
    protected $fillable=[
        'email','phone','about_ar','about_en','fax','address_ar','address_en',
        'map','twitter','facebook','linkedin',
        'instagram','youtube'
    ];


    public function getAddressAttribute()
    {
        return $this->attributes['address']    =   app()->getLocale() == 'ar' ? $this->address_ar : $this->address_en;
    }
    public function getAboutAttribute()
    {
        return $this->attributes['about']    =   app()->getLocale() == 'ar' ? $this->about_ar : $this->about_en;
    }



}
