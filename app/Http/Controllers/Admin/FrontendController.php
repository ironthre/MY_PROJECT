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
        $solid_out = Product::where('qty','0')->get();
        $users_normal = User::where('role_as','0')->get();
        $users_admin = User::where('role_as','1')->get();
        $users_super = User::where('role_as','2')->get();
        $pending_order = Order::where('status','0')->get();
        $complete_order = Order::where('status','1')->get();
        return view('admin.index', compact('products', 'users', 'category', 'orders', 'contact','solid_out','users_normal','users_admin','users_super','pending_order','complete_order'));
    }
}
