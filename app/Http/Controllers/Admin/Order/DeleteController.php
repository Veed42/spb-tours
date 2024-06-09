<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Guid;
use App\Models\Order;
use App\Models\Tour\TourProgram;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return RedirectResponse
     */
    public function __invoke(Order $order, Guid $guid, TourProgram $program)
    {
        $order->delete();
//        dd($tour);
        return redirect()->route('admin.order.index');
    }
}
