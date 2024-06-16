<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Guid;
use App\Models\Order;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
use App\Models\Tour\TourReview;
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
    public function __invoke(Tour $tour, Guid $guid,Order $order,TourReview $review, TourProgram $program)
    {
        $program->delete();
        $order->delete();
        $review->delete();
        $tour->delete();
//        dd($tour);
        return redirect()->route('admin.tour.index');
    }
}
