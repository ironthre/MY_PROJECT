<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersideController extends Controller
{
    public function index()
    {
        return view('userside.index');
    }
}
