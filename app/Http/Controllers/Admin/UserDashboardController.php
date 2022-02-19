<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function allUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function viewUser($id)
    {
        $users  = User::where('id', $id)->first();
        return view('admin.users.viewUser', compact('users'));
    }
}
