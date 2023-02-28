<?php

namespace App\Models;

use App\Casts\Money;
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

    protected $casts = [
        'price' => Money::class,
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

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function getRating()
    {
        if($this->ratings->sum('rating') > 0){

            $sum = $this->ratings->sum('rating');
            $count = (float)$this->ratings->count();
            return round($sum / $count, 1);
        }
        else
        {

        }
    }

    public function getReviewCount()
    {
        // dd($this->ratings);
        return $this->ratings->where('review', '!=', null)->count('review');
    }
    public function canRate()
    {

        $rating = auth()->user()->ratings->where('product_id' , $this->id)->count() == 0;
        if($rating)
        {
            return true; // baad me false krna h
        }
        return false;
    }
}
