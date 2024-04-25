<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
    public function __invoke(Tour $tour, Category $category)
    {
        $categories = Category::all();
        return view('admin.tour.show', compact('tour','categories'));
    }
}
