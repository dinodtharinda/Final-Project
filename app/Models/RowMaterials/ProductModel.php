<?php

namespace App\Models\RowMaterials;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
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
