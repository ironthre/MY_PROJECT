<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function allUsers()
    {
        $users = User::all();
        $contact = Contact::all();
        return view('admin.users.index', compact('users', 'contact'));
    }

    public function viewUser($id)
    {
        $users  = User::where('id', $id)->first();
        $contact = Contact::all();
        return view('admin.users.viewUser', compact('users', 'contact'));
    }
    public function profile()
    {
        $contact = Contact::all();
        $user = User::where('id', Auth::id())->first();
        return view('admin.users.profile', compact('user','contact'));
    }
    public function updateProfile(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $user->fnam = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->phone1 = $request->input('phone1');
        $user->phone2 = $request->input('phone2');
        $user->email = $request->input('email');
        $user->address1 = $request->input('address1');
        $user->update();
        return back()->with('status','Profile Updated Successful');
    }
    public function message($id)
    {
        $contact = Contact::all();
        $msg = Contact::where('id', $id)->first();
        return view('admin.users.message', compact('msg','contact'));
    }
    public function deleteMsg($id)
    {
        $msg = Contact::find($id);
        $msg->delete();
        return redirect('dashboard')->with('status', 'Message was deleted');
    }
}
