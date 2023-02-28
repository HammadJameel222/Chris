<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        'type','value'
    ];
    protected $casts = [
        'value' => Money::class,
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
