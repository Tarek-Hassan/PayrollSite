<?php

namespace App\Models;

use App\Models\IncomeTax;
use App\Models\IncomeTaxLayer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncomeTaxLayerSlice extends Model
{
    use HasFactory;
    protected $table = 'income_tax_layer_slices';
    
    protected $fillable = [
        'income_tax_layer_id', 'income_tax_id','from','to','rate','discount','discount_type',
        'max_tax_value','ratio','slice_net_value','minimum_net','maximum_net'
    ];


    public function incomeTaxLayer()
    {
        return $this->belongsTo(IncomeTaxLayer::class, 'income_tax_layer_id', 'id');
    }

    public function incomeTax()
    {
        return $this->belongsTo(IncomeTax::class, 'income_tax_id', 'id');
    }
}
