<?php

namespace App\Http\Controllers\Admin\ProgramTour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramTour\StoreRequest;
use App\Models\Guid;
use App\Models\Tour\Tour;
use App\Models\Tour\TourProgram;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{


    public function __invoke(StoreRequest $request, Tour $tour)
    {
//        $data = $request->validated();
//        $program = TourProgram::find('day');
//        $tour = Tour::all();
//
//       $collection = collect([
//           'title' => $data['title'],
//           'description_program_tour' => $data['description_program_tour'],
//           'day' => $data['day'],
//
//
//       ]);
//    $keyed = $collection->mapWithKeys(function ($item, $tour){
//       return [$item[$tour->program->day]  => $item[$tour->program->title]];
//    });
//        dd($keyed);
////        $days = $tour->program->day;
////
////        if ($days !== null){
////            foreach ($days as $item ){
////                $tourId = $item['tour_id'];
////            }
////        }
////        $dayData = [
////            'title' => $data['title'],
////            'description_program_tour' => $data['description_program_tour'],
////        ];
////        $data['day'] = array_map(function ($day) use ($dayData){
////            return [
////                $day['title'] = $dayData['title'];
////            $day['description_program_tour'] = $dayData['description_program_tour'];
////            ];
////
////
////        },$data['day']);
//        $data['back_image'] = Storage::disk('public')->put('/images',$data['back_image']);#
//        $data = session('newTour');
//        $tour->program->day = $data->all();
//        $data = $tour->program->day;
//        TourProgram::create($data);

        $data = $request->validated();
//        dd($data);
        $data['back_image'] = Storage::disk('public')->put('/images',$data['back_image']);
        TourProgram::firstOrCreate($data);
        return redirect()->route('admin.program_tour.index');

        // Очищаем данные из сессии

    }
}
