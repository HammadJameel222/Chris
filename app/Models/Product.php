<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $fillable = [
        'category_id' ,'name','model', 'description','price'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
        ->useDisk('products');
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'product_variants')->withPivot('price');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class);
    }

    public function hasRating(Type $var = null)
    {
        # code...
    }
}
