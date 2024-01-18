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



    public  function authenticated(Request $request, $user): \Illuminate\Http\RedirectResponse
    {
        $route = 'user.index';
        $message = 'Вы успешно вошли на сайт';
        if ($user->admin){
            $route = 'admin.index';
            $message = 'Вы вошли в панель управления';

        }
        return redirect()->route($route)
            ->with('success',$message);
    }

protected function loggedOut(Request $request)
{
    auth()->logout();
    return redirect('/');
}
}