<?php

namespace App\Http\Controllers\User\Tour\TourReview;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TourReview\StoreRequest;
use App\Models\Order;
use App\Models\Tour\Tour;
use App\Models\Tour\TourReview;


class StoreControllerTourReview extends Controller
{


    public function __invoke(Tour $tour, StoreRequest $request)
    {
        $data = $request->validated();
        $data['tour_id'] = $tour->id;
//        dd($data);
        TourReview::create($data);
        return redirect()->back();
    }
}
