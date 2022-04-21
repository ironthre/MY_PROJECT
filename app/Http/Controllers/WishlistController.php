<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wish = Wishlist::get();
        return view('userside.products.wishlist', compact('wish'));
    }

    public function addToWishlist(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('product_id');
            if (Product::where('id', $prod_id)->first()) {
                $wish = new Wishlist();
                $wish->user_id = Auth::id();
                $wish->prod_id = $prod_id;
                $wish->save();

                return response()->json(['status' =>  " Added to Wishlist"]);
            } else {
                return response()->json(['status' =>  "Product Not Found"]);
            }
        }else {
            return response()->json(['status' =>  "Login | Register to Continue"]);
        }
    }

    public function deleteWishItem(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Product::where('id', $prod_id)->first()) {
                $wishItem = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $wishItem->delete();
                return response()->json(['status' => 'Item Removed from wishlist']);
            } else {
                return response()->json(['status' =>  "Product Not Found"]);
            }
        } else {
            return response()->json(['status' =>  " Login to Continue"]);
        }
    }
    public function wishCount()
    {
        $wishCount = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['wish' => $wishCount]);
    }
}
