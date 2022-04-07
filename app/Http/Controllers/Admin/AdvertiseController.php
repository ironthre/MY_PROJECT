<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\Advertise;



class AdvertiseController extends Controller
{
    //
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
        $pending_order = Order::where('status','pending')->get();
        $complete_order = Order::where('status','complete')->get();
        return view('admin.advertise.index', compact('products', 'users','users_normal', 'users_admin', 'users_super', 'category', 'orders', 'contact','pending_order','solid_out','complete_order'));
    }

    public function adsIndex()
    {
        $ads = Advertise::get();
        return view('admin.advertise.ads',compact('ads'));
    }
    public function create()
    {
        return view('admin.advertise.createAds');
    }
    public function insert(Request $request)
    {
        $ads = new Advertise();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . rand(1,1000) . '.'. $ext;

            $file->move('assets/image/',$file_name);

            $ads->image = $file_name;
            $ads->brand = $request->input('brand');
            $ads->phone = $request->input('phone');
            $ads->email = $request->input('email');
            $ads->owner = $request->input('owner');
            $ads->expire = $request->input('expire');
            // return $file_name;
            $ads->save();
            return redirect('view-ads')->with('status', 'Ads Uploaded Successful');

        }else{
            return redirect('/');
        }

    }

    public function delete($id)
    {
        $ad = Advertise::find($id);
        if ($ad->image) {
            $path = 'assets/image/' . $ad->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $ad->delete();
        return redirect('view-ads')->with('status', "Ad Deleted Successfully");
    }

    public function showAds()
    {
        $ads = Advertise::get();
        return view('layouts.include.ads',compact('ads'));
    }


    public function users()
    {
        $users = User::all();
        return view('admin.advertise.users',compact('users'));
    }
    public function userview($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.advertise.viewUser', compact('user'));
    }

    public function userupdate($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.advertise.edituser',compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->input('id'))->first();
        $user->role_as= $request->input('role');
        $user->update();
        return redirect('user-access')->with('status', 'User Role Updated Successfully');
    }

}
