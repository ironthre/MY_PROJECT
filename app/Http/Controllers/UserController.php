<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderby('id','desc')->get();
        return view('userside.orders.index', compact('orders'));
    }

    public function viewOrder($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('userside.orders.viewOrder', compact('orders'));
    }
    public function updateProfile(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $user->username = $request->input('username');
        $user->fnam = $request->input('fnam');
        $user->lname = $request->input('lname');
        $user->phone1 = $request->input('phone1');
        $user->address1 = $request->input('address1');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->update();
        return back()->with("status", "Profile Updated");
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'confirm_new_password' => ['required'],
        ]);

        $hashedPassword = Auth::user()->password;
        // if (Hash::check($request->new_password, $hashedPassword)) {
        //     return back()->with("status", "Pass word matches");
        // }else{
        //     return redirect('/');
        // }

        if(Hash::check($request->current_password, $hashedPassword)){
            if (!Hash::check($request->new_password, $hashedPassword)) {
                User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
                return back()->with("status", "Password Updated");
            }else{
                return back()->with("error", "New Password can not be the old Password","error");
            }
        }else{
            return back()->with("error", "Old Password Does Not Match","error");
        }
    }
}
