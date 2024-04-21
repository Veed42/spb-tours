<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tour\StoreRequest;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{


    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::put('/images',$data['preview_image']);
        $data['main_image'] = Storage::put('/images',$data['main_image']);
        Tour::firstOrcreate($data);
        return redirect()->route('admin.tour.index');
    }
}
