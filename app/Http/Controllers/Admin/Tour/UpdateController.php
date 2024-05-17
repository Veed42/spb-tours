<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tour\UpdateRequest;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;

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
        if (array_key_exists('preview_image',$data)){
            $data['preview_image'] = Storage::disk('public')->put('/images',$data['preview_image']);
        }
        if (array_key_exists('main_image',$data)){
            $data['main_image'] = Storage::disk('public')->put('/images',$data['main_image']);
        }
        $tour->update($data);
        return view('admin.tour.show', compact('tour'));
    }
}
