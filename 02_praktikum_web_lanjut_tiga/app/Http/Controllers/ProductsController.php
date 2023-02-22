<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function edu(){
        return 'Marbel Education Games';
    }

    public function kids(){
        return 'Marbel and Friends Kids Games ';
    }

    public function riri(){
        return 'Riri Story Books';
    }

    public function kolak(){
        return 'Kolak Kids Songs';
    }
}
