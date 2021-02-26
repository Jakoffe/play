<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::Class,'stores_products');

    }
}
