<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'short_description',
        'available_amount'
    ];

    public function specification()
    {
        return $this->hasMany(Specification::class);
    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function parameter()
    {
        return $this->hasOne(Parameter::class);
    }


}
