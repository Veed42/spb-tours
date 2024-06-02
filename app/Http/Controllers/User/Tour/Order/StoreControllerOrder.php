<?php

namespace App\Http\Controllers\User\Tour\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Order\StoreRequest;
use App\Models\Order;
use App\Models\Tour\Tour;
use Illuminate\Support\Facades\Auth;


class StoreControllerOrder extends Controller
{


    public function __invoke(StoreRequest $request, Tour $tour)
    {
        $data = $request->validated();
        $data['tour_id'] = $tour->id;
        $data['user_id'] = Auth::id();
        //        dd($request);
        Order::create($data);
        return redirect()->route('success-order', $tour->id);
    }
}
