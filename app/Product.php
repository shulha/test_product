<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "programId",
        "programName" ,
        "price",
        "currency",
        "description",
        "manufacturer",
        "ean",
        "image",
        "priceOld",
        "shippingCosts",
        "merchantCategory",
        "merchantEmail"
    ];
}
