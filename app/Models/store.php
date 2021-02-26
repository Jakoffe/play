<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->hasMany(Owner::Class);

    }

    public function product()
    {
        return $this->belongsToMany(Product::Class,'stores_products');

    }
}
