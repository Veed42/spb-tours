<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'phone';
    }

    public function index(Request $request)
    {
        $request->validate([
            'phone' => 'required|max:11',
            'password' => 'required|min:5|string'
        ]);
        $credentials = $request->only(['phone', 'password']);
        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            if ($user->role === 'admin') {
                return redirect(route('admin.index'));
            } else {
                return redirect(route('home'));
            }

        }
        return redirect()->back()->with('error', 'Пользователя не существует');
    }
}


