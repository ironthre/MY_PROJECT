<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

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
}
