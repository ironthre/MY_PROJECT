<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $users = User::get();
        $category = Category::get();
        $orders = Order::get();
        $contact = Contact::get();
        return view('admin.index', compact('products', 'users', 'category', 'orders', 'contact'));
    }
}
