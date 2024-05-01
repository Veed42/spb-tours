<?php

namespace App\Http\Controllers\Admin\Guid;

use App\Http\Controllers\Controller;
use App\Models\Guid;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;

class IndexController extends Controller
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
    public function index(Tour $tour)
    {
        $tour = Tour::all()->where('id','title');
        $guides = Guid::all();
        return view('admin.guid.index', compact('guides', 'tour'));
    }
}
