<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

