<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'review','rating'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
