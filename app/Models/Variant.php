<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_id' ,'name' , 'price'
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class , 'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_variants')->withPivot('price');
    }

}
