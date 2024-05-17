<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =
    [
        'name',
        'description',
        'image',
        'price',
        'idmarque',
        'idcategory',
        'iduser',
        'featured',
        'trading',
        'bestdeals',
        'newproduct',
        'bestselling',

    ];
}
