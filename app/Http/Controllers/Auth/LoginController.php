<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\LoginAuthRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view ('auth.login');
    }

    public function auth(LoginAuthRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            return ('Ok');
        }
        
        return back()->withErrors(['email' => trans('auth.failed')]);
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
