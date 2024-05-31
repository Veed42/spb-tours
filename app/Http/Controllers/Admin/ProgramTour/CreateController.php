<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Request;

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
    public function __invoke(Request $request, Category $categories, Guid $guides, Tour $tour ,TourProgram $programs)
    {
        $programs = TourProgram::all();
        $guides = Guid::all();
        $tours = Tour::all();
        $categories = Category::all();
        $programsData = [
            $programs
        ];
        session()->put('programsData', $programsData);


        return view('admin.program_tour.create', compact('tour','categories', 'guides','tours', 'programs', 'programsData'));
    }
}
