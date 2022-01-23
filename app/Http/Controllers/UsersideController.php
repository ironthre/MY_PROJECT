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

    public function viewCategory($name)
    {
        if (Category::where('name', $name)->exists()) {
            $category = Category::where('name', $name)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '1')->get();
            return view('userside.products.index', compact('category', 'products'));
        } else {
            return redirect('/')->with('status', "Category Name does not exist");
        }
    }

    public function mobile($name)
    {
        // $name = $request->value;
        //echo $name;
        if (Category::where('name', $name)->exists()) {
            $category = Category::where('name', $name)->first();
            $product = Product::where('cate_id', $category->id)->where('status', '1')->get();
            return view('userside.products.mobile', compact('category', 'product'));
        } else {
            return redirect('/')->with('status', "Category Name does not exist");
        }
    }

    public function productview($cate_name, $prod_name)
    {
        if (Category::where('name', $cate_name)->exists()) {
            if (Product::where('name', $prod_name)->exists()) {
                $product = Product::where('name', $prod_name)->first();
                return view('userside.products.productDetails', compact('product'));
            } else {
                return redirect('/')->with('status', " Sorry, Product Details were not found");
            }
        } else {
            return redirect('/')->with('status', " Sorry, Product Details were not found");
        }
    }
}
