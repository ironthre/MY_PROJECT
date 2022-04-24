<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;


    public function username()
    {
        $login = request()->input('username');

        if(is_numeric($login)){
            $field = 'phone1';
        } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } else {
            $field = 'username';
        }

        request()->merge([$field => $login]);

        return $field;
    }

    protected function authenticated(){
        if(Auth::user()->role_as == '1') {
            return redirect('dashboard')->with('status', 'Welcome to Your Dashboard');
        }
        if(Auth::user()->role_as == '2'){
            return redirect('advertise')->with('status','Welcome to Advertise Dashboard');
        }
        elseif(Auth::user()->role_as == '0'){
            return redirect('/')->with('status', 'Logged in Successfully');
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
