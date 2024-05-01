<?php

namespace App\Http\Controllers\Admin\Guid;

use App\Http\Controllers\Controller;
use App\Models\Guid;
use App\Models\Tour\Tour;
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
    public function __invoke(Guid $guid)
    {
        return view('admin.guid.edit', compact('guid'));
    }
}
