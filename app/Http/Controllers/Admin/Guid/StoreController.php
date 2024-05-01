<?php

namespace App\Http\Controllers\Admin\Guid;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Guid\StoreRequest;
use App\Models\Guid;
use App\Models\Tour\Tour;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{


    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image_guid'] = Storage::disk('public')->put('/images',$data['image_guid']);
//        dd($data);
        Guid::firstOrcreate($data);
        return redirect()->route('admin.guid.index');
    }
}
