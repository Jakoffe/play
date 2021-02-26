<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;

    public function owner(){
        return $this->hasMany(owner::Class);

    }

    public function product(){
        return $this->hasMany(product::Class);

    }
}
