<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
