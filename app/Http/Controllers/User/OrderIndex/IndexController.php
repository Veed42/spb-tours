<?php

namespace App\Http\Controllers\User\OrderIndex;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()

    {
        $statuses = Order::STATUSES;
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('user.index-order', compact('orders', 'statuses'));
    }
}
