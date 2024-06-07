<?php

use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\IndexController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Guid;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\ProgramTour;
use App\Http\Controllers\Admin\Tour;
use App\Http\Controllers\Admin\Order;
use App\Http\Controllers\User\OrderIndex;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\Guid\ShowControllerGuid;
use App\Http\Controllers\User\Main\HomeController;
use App\Http\Controllers\User\Tour\Order\CreateControllerOrder;
use App\Http\Controllers\User\Tour\Order\IndexControllerSuccess;
use App\Http\Controllers\User\Tour\Order\StoreControllerOrder;
use App\Http\Controllers\User\Tour\ShowControllerTour;
use App\Http\Controllers\User\Tour\TourReview\StoreControllerTourReview;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Main'], function (){
    Route::get('/', [HomeController::class, 'index'])->name('/');
//    Route::get('/{title}', [ShowControllerTour::class,'__invoke'])->name('tour.show');

});

Route::group([
    'middleware' => 'admin',
    'namespace' => 'Admin',
    'prefix' => 'admin',
    ],
    function(){
    Route::group(['namespace' => 'Main'], function (){
        Route::get('/', [AdminController::class,'__invoke'])->name('admin');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function (){
       Route::get('/', [IndexController::class, 'index'])->name('admin.category.index');
       Route::get('/create', [CreateController::class, '__invoke'])->name('admin.category.create');
       Route::post('/store', [StoreController::class, '__invoke'])->name('admin.category.store');
       Route::get('/{category}', [ShowController::class, '__invoke'])->name('admin.category.show');
       Route::get('/{category}/edit', [EditController::class, '__invoke'])->name('admin.category.edit');
       Route::patch('/{category}', [UpdateController::class, '__invoke'])->name('admin.category.update');
       Route::delete('/{category}', [DeleteController::class, '__invoke'])->name('admin.category.delete');

//       Route::get('/', 'CreateController@index')->name('category.create');
    });
    Route::group(['namespace' => 'Tour', 'prefix' => 'tours'], function (){

        Route::get('/', [Tour\IndexController::class,'index'])->name('admin.tour.index');
        Route::get('/create', [Tour\CreateController::class,'__invoke'])->name('admin.tour.create');
        Route::post('/store', [Tour\StoreController::class,'__invoke'])->name('admin.tour.store');
        Route::get('/{tour}', [Tour\ShowController::class,'__invoke'])->name('admin.tour.show');
        Route::get('/error', [Tour\IndexController404Review::class,'__invoke'])->name('admin.tour.error');
        Route::get('/{tour}/edit', [Tour\EditController::class,'__invoke'])->name('admin.tour.edit');
        Route::patch('/{tour}', [Tour\UpdateController::class,'__invoke'])->name('admin.tour.update');
        Route::delete('/{tour}', [Tour\DeleteController::class,'__invoke'])->name('admin.tour.delete');
        Route::delete('/reviews/{review}', [Tour\DeleteControllerReview::class,'__invoke'])->name('admin.review.delete');

//       Route::get('/', 'CreateController@index')->name('category.create');
    });


        Route::group(['namespace' => 'ProgramTour', 'prefix' => 'program-tours'], function (){

            Route::get('/', [ProgramTour\IndexController::class,'index'])->name('admin.program_tour.index');
            Route::get('/create', [ProgramTour\CreateController::class,'__invoke'])->name('admin.program_tour.create');
            Route::post('/store', [ProgramTour\StoreController::class,'__invoke'])->name('admin.program_tour.store');
            Route::get('/{program}', [ProgramTour\ShowController::class,'__invoke'])->name('admin.program_tour.show');
            Route::get('/{program}/edit', [ProgramTour\EditController::class,'__invoke'])->name('admin.program_tour.edit');
            Route::patch('/{program}', [ProgramTour\UpdateController::class,'__invoke'])->name('admin.program_tour.update');
            Route::delete('/{program}', [ProgramTour\DeleteController::class,'__invoke'])->name('admin.program_tour.delete');
//       Route::get('/', 'CreateController@index')->name('category.create');
        });

        Route::group(['namespace' => 'Order',
            'prefix' => 'orders'], function (){

            Route::get('/', [Order\IndexController::class,'index'])->name('admin.orders.index');
            Route::get('/{order}', [Order\ShowController::class,'__invoke'])->name('admin.order.show');
            Route::get('/{order}/edit', [Order\EditController::class,'__invoke'])->name('admin.order.edit');
            Route::patch('/{order}', [Order\UpdateController::class,'__invoke'])->name('admin.order.update');
            Route::delete('/{order}', [Order\DeleteController::class,'__invoke'])->name('admin.order.delete');
//       Route::get('/', 'CreateController@index')->name('category.create');
        });


    Route::group(['namespace' => 'Guid', 'prefix' => 'guides'], function (){

        Route::get('/', [Guid\IndexController::class,'index'])->name('admin.guid.index');
        Route::get('/create', [Guid\CreateController::class,'__invoke'])->name('admin.guid.create');
        Route::post('/store', [Guid\StoreController::class,'__invoke'])->name('admin.guid.store');
        Route::get('/{guid}', [Guid\ShowController::class,'__invoke'])->name('admin.guid.show');
        Route::get('/{guid}/edit', [Guid\EditController::class,'__invoke'])->name('admin.guid.edit');
        Route::patch('/{guid}', [Guid\UpdateController::class,'__invoke'])->name('admin.guid.update');
        Route::delete('/{guid}', [Guid\DeleteController::class,'__invoke'])->name('admin.guid.delete');
//       Route::get('/', 'CreateController@index')->name('category.create');
    });
});

//User route
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/login', [LoginController::class, 'index'])->name('login');


Route::group(['namespace'=>'User'],
    function (){
    Route::group(['namespace' => 'Main'], function (){
            Route::get('/', [HomeController::class,'index'])->name('/');
        });
    Route::group([
        'namespace' => 'Tour',
        'prefix' => 'tour'],
        function (){

        Route::get('/{tour}', [ShowControllerTour::class, '__invoke'])->name('tour.show');

        Route::group(['namespace' => 'Order',
            'prefix' => '{tour}/order'],
            function (){
           Route::get('/',[CreateControllerOrder::class, '__invoke'])->name('user.create.order');
           Route::post('/store',[StoreControllerOrder::class, '__invoke'])->name('user.store.order');
           Route::get('/success' , [IndexControllerSuccess::class, 'index'])->name('success-order');
        });
        Route::group([
                'namespace' => 'TourReview',
                'prefix' => '{tour}/review' ],
            function (){
                Route::post('/store', [StoreControllerTourReview::class,'__invoke'])->name('tour.review.store');
            });
    });
    Route::group(['namespace' => 'Order'], function (){
        Route::get('/orders', [OrderIndex\IndexController::class,'index'])->name('index.order');
    });

    Route::group([
        'namespace'=> 'Guid' ,
        'prefix' => 'guid'],
        function (){
        Route::get('/{guid}', [ShowControllerGuid::class, '__invoke'])->name('guid.show');
    });



});




// Clear application cache:

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

Route::get('/route-cache', function() {
Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});
//Clear config cache:

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});
// Clear view cache:

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

//Route::post('/login',function (){
//   return view('');
//});
//
//Route::post('/register',function (){
//    return view('');
//});








