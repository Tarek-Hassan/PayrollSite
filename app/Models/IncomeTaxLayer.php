<?php

namespace App\Models;

use App\Models\IncomeTax;
use App\Models\LayerType;
use App\Models\IncomeTaxLayerSlice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncomeTaxLayer extends Model
{
    use HasFactory;
    protected $table = 'income_tax_layers';

    protected $fillable = [
        'layer_type_id', 'income_tax_id','max','min','net_min','net_max'
    ];


    public function layerType()
    {
        return $this->belongsTo(LayerType::class, 'layer_type_id', 'id');
    }

    public function incomeTax()
    {
        return $this->belongsTo(IncomeTax::class, 'income_tax_id', 'id');
    }

    public function incomeTaxLayerSlice() {
        return $this->hasMany(IncomeTaxLayerSlice::class,'income_tax_layer_id');
    }

}
