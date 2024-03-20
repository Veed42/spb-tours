<?php

use App\Http\Controllers\Auth\LoginController as LoginController;
use App\Http\Controllers\Auth\RegisterController ;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::redirect('/home', '/');
Route::get('/',function (){
    return view('home');
})->name('home');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login','Auth\LoginController@login');


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


Route::group([
    'as' => 'user.', // имя маршрута, например user.index
    'middleware' => ['auth', 'disable_back'] // один или несколько посредников
], function () {
    // главная страница личного кабинета пользователя
    // CRUD-операции над профилями пользователя
    // просмотр списка заказов в личном кабинете
//    Route::get('order', 'OrderController@index')->name('order.index');
    // просмотр отдельного заказа в личном кабинете
//    Route::get('order/{order}', 'OrderController@show')->name('order.show');
// do middleware

});






