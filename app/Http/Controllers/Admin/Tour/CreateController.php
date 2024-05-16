<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use Illuminate\Contracts\Support\Renderable;

class CreateController extends Controller
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
    public function __invoke(Category $categories, Guid $guides)
    {
        $guides = Guid::all();
        $categories = Category::all();
        return view('admin.tour.create', compact('categories', 'guides'));
    }
}
