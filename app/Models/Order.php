<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['firstName', 'lastName', 'phone', 'email', 'address', 'totalPrice'];

    public function products()
    {
        return $this->hasManyThrough(Product::class, OrderDetail::class, 'order_id', 'id', 'id', 'product_id');
    }
    use HasFactory;
}
