<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Owner;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $company = Company::updateOrCreate(['id' => 1],[
            'name' => 'Lars',
            'address' => 'larstyndskidsmark 1',
            'email' => 'larstyndskid@gmail.com'
        ]);

        $product = Product::updateOrCreate(['id' => 1],[
            'name' => 'solenergi',
            'price' => '123',
            'stock' => '0',
            'company_id' => '1'
        ]);

        $store = Store::updateOrCreate(['id' => 1],[
            'name' => 'butik lars',
            'address' => 'larstyndskidsmark 1'
        ]);

        $owner = Owner::updateOrCreate(['id' => 1],[

        ]);
        return $company;

    }
}
