<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Order;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;

class ShowController extends Controller
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
    public function __invoke(Order $order, Category $category, Guid $guid)
    {
        $categories = Category::all();

//        $tour->guid();
//        dd($tour);
        return view('admin.orders.show', compact('order','categories', 'guid'));
    }
}
