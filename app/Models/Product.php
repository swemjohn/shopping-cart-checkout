<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = ['product_code', 'name', 'price', 'offer_desc'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

}
