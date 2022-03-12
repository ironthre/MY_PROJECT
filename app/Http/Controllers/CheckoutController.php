<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($old_cartItems as $item) {
            if (!Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists()) {
                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('userside.products.checkout', compact('cartItems'));
    }

    public function indexsingle(Request $request)
    {
        $qty = $request->input('quantity');
        $id = $request->input('id');
        $msg = 12;
        $text = 'hello user';
        $product = Product::find($id);
        return view('userside.products.checkoutSingle', compact('product', 'text'))->with('qty', $qty);
    }

    public function singleOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone1 = $request->input('phone1');
        $order->city = $request->input('city');
        $order->address1 = $request->input('address1');

        $total = 0;
        $orederItem_Id  = $request->input('id');
        $order_qty = $request->input('qty');
        $order_price = $request->input('price');
        $total_price = $order_qty * $order_price;

        $order->total_price = $total_price;
        $order->tracking_no = rand(10000000, 99999999);
        $order->save();

        OrderItem::create([
            'order_id' => $order->id,
            'prod_id' => $orederItem_Id,
            'qty' => $order_qty,
            'price' => $total_price,
        ]);
        $prod = Product::where('id', $orederItem_Id)->first();
        $prod->qty = $prod->qty - $order_qty;
        $prod->update();

        if (Auth::user()->address1 == NULL) {
            $user = User::where('id', Auth::id())->first();
            $user->fnam = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone1 = $request->input('phone1');
            $user->city = $request->input('city');
            $user->address1 = $request->input('address1');
            $user->update();
        }
        return redirect('my-orders')->with('status', 'Order Placed Successful');
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone1 = $request->input('phone1');
        $order->city = $request->input('city');
        $order->address1 = $request->input('address1');

        $total = 0;
        $cartItems_total = Cart::where('user_id', Auth::id())->get();

        foreach ($cartItems_total as $prod) {
            $total += $prod->products->selling_price;
        }
        $order->total_price = $total;


        $order->tracking_no = rand(10000000, 99999999);
        $order->save();

        $cartItems = Cart::where('user_id', Auth::id())->get();

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);
            $prod = Product::where('id', $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if (Auth::user()->address1 == NULL) {
            $user = User::where('id', Auth::id())->first();
            $user->fnam = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone1 = $request->input('phone1');
            $user->city = $request->input('city');
            $user->address1 = $request->input('address1');
            $user->update();
        }
        $cartItems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartItems);
        return redirect('/All Products')->with('status', 'Order Placed Successful');
    }
}
