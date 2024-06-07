<?php

namespace App\Http\Controllers\User\Tour\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Tour\Tour;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;

class IndexControllerSuccess extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(Tour $tour,  Order $order, User $user)

    {

        return view('user.success-order', compact('tour','order', 'user'));
    }
}
