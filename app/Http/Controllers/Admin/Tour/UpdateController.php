<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;

class UpdateController extends Controller
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
    public function __invoke(UpdateRequest $request, Tour $tour)
    {
        $data = $request->validated();
        $tour->update($data);
        return view('admin.category.show', compact('tour'));
    }
}
