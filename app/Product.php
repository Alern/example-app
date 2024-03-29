<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'qty',
        'price',
        'description'
    ];

}
