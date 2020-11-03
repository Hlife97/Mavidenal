<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'type', 'price'
    ];

    public function getPriceAttribute($value){
        $newForm = "$" .$value;
        return $newForm;
    }
}