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
//        dd($request);
        $data = $request->validated();


        Order::firstOrCreate($data);
        return redirect()->route('success-order', $tour->id);
    }
}
