<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UsersideController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending', '1')->get();
        $trending_category = Category::where('popular', '1')->get();
        $bags = Product::where('cate_id', '17')->get();
        return view('userside.index', compact('featured_products', 'trending_category', 'bags'));
    }
}
