<?php

use App\Http\Controllers\Auth\LoginController as LoginController;
use App\Http\Controllers\Auth\RegisterController ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::redirect('/home', '/');

Auth::routes();




//Route::post('/login',function (){
//   return view('');
//});
//
//Route::post('/register',function (){
//    return view('');
//});
//Route::name('user.')
//    ->middleware('disable_back')
//    ->prefix('user')
//    ->group(
//    function () {
//
//});

Route::get('index', 'UserController@index')->name('partials.index');
//Route::post('login','LoginController@index')->name('login');
Route::get('/logout', 'AuthController@loggedOut')->name('logout');

//Route::group
//    ['middleware' => ['auth', 'disable_back'],
//        'namespace' => 'User',
//        ],
//    function (){
//        Route::get('/logout', 'AuthController@loggedOut')->name('logout');
//});

//Route::group([
//    'as' => 'user.', // имя маршрута, например user.index
//    'prefix' => 'user', // префикс маршрута, например user/index
//    'middleware' => ['auth', 'disable_back'] // один или несколько посредников
//], function () {
//    // главная страница личного кабинета пользователя
//    Route::get('index', 'UserController@index')->name('index');
//    // CRUD-операции над профилями пользователя
//    Route::get('/logout', 'AuthController@loggedOut')->name('logout');
//    Route::resource('profile', 'ProfileController');
//    // просмотр списка заказов в личном кабинете
//    Route::get('order', 'OrderController@index')->name('order.index');
//    // просмотр отдельного заказа в личном кабинете
//    Route::get('order/{order}', 'OrderController@show')->name('order.show');
//// do middleware
//
//});






