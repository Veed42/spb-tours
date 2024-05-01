<?php

namespace App\Http\Controllers\Admin\Guid;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Guid\UpdateRequest;
use App\Models\Guid;
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
    public function __invoke(UpdateRequest $request, Guid $guid)
    {
        $data = $request->validated();
        $guid->update($data);
        return view('admin.guid.show', compact('guid'));
    }
}
