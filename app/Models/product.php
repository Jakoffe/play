<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function company(){
        return $this->hasMany(company::class);

    }

    public function store(){
        return $this->hasMany(store::Class);

    }
}
