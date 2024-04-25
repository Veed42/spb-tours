<?php

use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\IndexController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;

use App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Main\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Main'], function (){
    Route::get('/', [HomeController::class, 'index'])->name('/');
});

Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => 'auth'], function(){
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
        Route::get('/{tour}/edit', [Tour\EditController::class,'__invoke'])->name('admin.tour.edit');
        Route::patch('/{tour}', [Tour\UpdateController::class,'__invoke'])->name('admin.tour.update');
        Route::delete('/{tour}', [Tour\DeleteController::class,'__invoke'])->name('admin.tour.delete');


//       Route::get('/', 'CreateController@index')->name('category.create');
    });
});


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/login', [LoginController::class, 'index'])->name('login');


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








