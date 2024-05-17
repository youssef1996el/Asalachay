<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneOrders extends Model
{
    use HasFactory;
    protected $table='ligneorders';
    protected $fillable =
    [
       'qte', 'price', 'total', 'idorders', 'idproduct',
    ];
}
