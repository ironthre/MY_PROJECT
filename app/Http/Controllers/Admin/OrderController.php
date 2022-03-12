<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function allOrders()
    {
        $orders = Order::get();
        $contact = Contact::all();
        return view('admin.orders.allOrders', compact('orders', 'contact'));
    }
    public function index()
    {
        $orders = Order::where('status', '0')->get();
        $contact = Contact::all();
        return view('admin.orders.index', compact('orders', 'contact'));
    }

    public function viewOrder($id)
    {
        $orders = Order::where('id', $id)->first();
        $contact = Contact::all();
        return view('admin.orders.view', compact('orders', 'contact'));
    }

    public function updateOrder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status', 'Order Status Updates Successful');
    }

    public function orderHistory()
    {
        $orders = Order::where('status', '1')->get();
        $contact = Contact::all();
        return view('admin.orders.history', compact('orders', 'contact'));
    }
}
