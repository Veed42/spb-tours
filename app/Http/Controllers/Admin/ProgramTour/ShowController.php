<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
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
    public function __invoke(Tour $tour,TourProgram $program, Category $category, Guid $guid)
    {
        $categories = Category::all();
//        $tour->guid();
//        dd($tour);
        return view('admin.program_tour.show', compact('tour','categories', 'guid', 'program'));
    }
}
