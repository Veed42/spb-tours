<?php

namespace App\Http\Controllers\User\OrderIndex;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Order;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;

class ShowControllerOrder extends Controller
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
    public function __invoke(Tour $tour,Order $order,   Category $category)
    {

        //Url id instead title
        //заменяет айди в юрл на название тура
//        foreach ($tours as $tour){
//            $tour->slug = Str::slug($tour->title);
//        }
        $statuses = Order::STATUSES;
        return view('user.show-order', compact('tour', 'order', 'statuses'));
    }
}
