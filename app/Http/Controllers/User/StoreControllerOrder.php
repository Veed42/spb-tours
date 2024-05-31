<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Order\StoreRequest;
use App\Models\Order;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;


class StoreControllerOrder extends Controller
{


    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
//        dd($request);
        Order::firstOrCreate($data);
        return redirect()->route('admin.tour.index');
    }
}
