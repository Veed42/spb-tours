<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Models\Guid;
use App\Models\Tour\Tour;
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
    public function __invoke(TourProgram $program)
    {
        $program->delete();
//        dd($tour);
        return redirect()->route('admin.program_tour.index');
    }
}
