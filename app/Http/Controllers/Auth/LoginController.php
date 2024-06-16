<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return string
     */
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }

    public function username()
    {
        return 'phone';
    }
    public function index(LoginRequest $request)
    {

        $credentials = $request->only(['phone', 'password']);
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            if ($user->role == 'admin') {
                return redirect(route('admin'));
            } else {
                return redirect(route('/'));
            }

        }

        return redirect()->back()->withInput($request->only('phone'))->withErrors(['password' => ' Неверный пароль или номер телефона']);
    }
}


