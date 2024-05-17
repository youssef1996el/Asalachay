<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageproducts extends Model
{
    use HasFactory;
    protected $table ='imageproducts';
    protected $fillable =
    [
        'idproduct',
        'image',

    ];
}
