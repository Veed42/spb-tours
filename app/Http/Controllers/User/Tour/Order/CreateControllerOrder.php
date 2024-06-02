<?php

namespace App\Http\Controllers\User\Tour\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;

class CreateControllerOrder extends Controller
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
    public function __invoke(Tour $tour,Guid $guid,   Category $category)
    {

        //Url id instead title
        //заменяет айди в юрл на название тура
//        foreach ($tours as $tour){
//            $tour->slug = Str::slug($tour->title);
//        }
        return view('user.create-order', compact('tour', 'guid'));
    }
}
