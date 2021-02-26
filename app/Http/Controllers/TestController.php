<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $company = company::where('id','!=',2)->get();
        return $company;
    }
}
