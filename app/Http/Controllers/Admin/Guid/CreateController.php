<?php

namespace App\Http\Controllers\Admin\Guid;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour\Tour;
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
    public function __invoke(Tour $tours)
    {
        $tours = Tour::all();
        return view('admin.guid.create', compact('tours'));
    }
}
