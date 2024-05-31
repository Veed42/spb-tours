<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramTour\UpdateRequest;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
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
    public function __invoke(UpdateRequest $request, TourProgram $program, Tour $tour)
    {
        $data = $request->validated();
//        dd($data);
        if (array_key_exists('back_image',$data)){
            $data['back_image'] = Storage::disk('public')->put('/images',$data['back_image']);
        }
        $program->update($data);
        return view('admin.program_tour.show', compact('program', 'tour'));
    }
}
