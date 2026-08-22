<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name', 'price', 'stock_quantity', 'description'];
}
