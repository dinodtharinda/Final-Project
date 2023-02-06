<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'product_id', 'image_path'
    ];
    public function product()
    {
        return $this->belongsTo(
            Product::class,
        );
    }
}
