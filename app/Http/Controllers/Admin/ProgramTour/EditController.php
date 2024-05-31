<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
use Illuminate\Contracts\Support\Renderable;

class EditController extends Controller
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
    public function __invoke(Tour $tour, TourProgram $program)
    {
        $tours = Tour::all();
        return view('admin.program_tour.edit', compact('tour','program', 'tours'));
    }
}
