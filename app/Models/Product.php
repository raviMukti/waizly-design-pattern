<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property string $sku
 * @property int $stock
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
}
