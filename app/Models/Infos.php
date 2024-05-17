<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    use HasFactory;
    protected $table ='infos';
    protected $fillable =
    [
       'address', 'phone', 'email', 'logo',

    ];
}
