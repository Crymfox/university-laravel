<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'details', 'category', 'point_of_sale' ];
    public function productsCount()
    {
        return $this->products()->count();
    }
}
