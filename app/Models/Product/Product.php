<?php

namespace App\Models\Product;

use App\Models\Customer\CartProduct;
use App\Models\Customer\OrderProduct;
use App\Models\RowMaterials\ProductFabric;
use App\Models\RowMaterials\ProductModel;
use App\Models\RowMaterials\ProductSize;
use App\Models\RowMaterials\ProductTimber;
use App\Models\RowMaterials\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'category',
        'model_id', 'type_id', 'size_id', 'fabric_id',
        'timber_id', 'description', 'quantity',
        'unit_price', 'date', 'is_remove'
    ];

    public function productsize()
    {
        return $this->hasOne(
            ProductSize::class,
            'id',
            'size_id'
        );
    }

    public function productfabric()
    {
        return $this->hasOne(
            ProductFabric::class,
            'id',
            'fabric_id'
        );
    }
    public function producttimber()
    {
        return $this->hasOne(
            ProductTimber::class,
            'id',
            'timber_id'
        );
    }

    public function productmodel()
    {
        return $this->hasOne(
            ProductModel::class,
            'id',
            'model_id'
        );
    }
    public function producttype()
    {
        return $this->hasOne(
            ProductType::class,
            'id',
            'type_id'
        );
    }

    public function proudctImages(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function cartProduct()
    {
        return $this->belongsTo(
            CartProduct::class,
        );
    }

    public function orderProduct()
    {
        return $this->belongsTo(
            OrderProduct::class,
        );
    }


}
