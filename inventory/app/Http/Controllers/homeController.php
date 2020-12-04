<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function productNumber()
    {
        $productList = Product::all();
        return view('admin.dashboard', compact('productList'));
    }
}
