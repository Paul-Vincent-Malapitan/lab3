<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class UserController extends BaseController
{
    public function home()
    {

        $main = new ProductModel;
        $data = [
            'items' => $main->findAll()
        ];
        return view('ecommerce',  $data);
    }
}
