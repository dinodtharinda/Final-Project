<?php

namespace App\Models\RowMaterials;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Product;

class ProductSize extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function product()
    {
        return $this->belongsTo(
            Product::class,
        );
    }
}
