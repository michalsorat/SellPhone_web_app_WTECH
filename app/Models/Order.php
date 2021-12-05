<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'street',
        'street_nr',
        'city',
        'psc',
        'product_id',
        'quantity',
        'status'
//        'transport_type',
//        'payment_type'
    ];

    public function shoppingCart()
    {
        return $this->hasOne(ShoppingCart::class);
    }
}
