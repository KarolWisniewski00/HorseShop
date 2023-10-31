<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'seo_title',
        'order',
        'view',
        'busket',
        'sell',
        'photo',
        'attr',
        'price',
        'price_promo',
        'seo_description',
        'visibility_in_google',
        'visibility_on_website',
    ];
}
