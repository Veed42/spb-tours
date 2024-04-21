<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Tour\Tour;
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
    public function __invoke(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('admin.tour.index');
    }
}
