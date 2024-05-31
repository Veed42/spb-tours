<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guid;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;

class ShowControllerTour extends Controller
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
    public function __invoke(Tour $tour,Guid $guides,   Category $category)
    {

        $guides = $tour->guid;
        $tour2 = $tour->program;
        $tours = Tour::all();
        $tour_program = Tour::with('program')->find('tour_id');
        $programs = TourProgram::all();
//        $programs = $program->tour;
//        dd($programs);
        //Url id instead title
        //заменяет айди в юрл на название тура
//        foreach ($tours as $tour){
//            $tour->slug = Str::slug($tour->title);
//        }
        return view('user.show-tour', compact('tour', 'tour2', 'tour_program','guides', 'tours', 'programs'));
    }
}
