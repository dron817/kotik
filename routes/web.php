<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

mb_internal_encoding("UTF-8");

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');
Route::get('/events/{slashData?}', 'App\Http\Controllers\EventsController@index')->where('slashData', '(.*)')->name('events');
//Route::get('/event', 'App\Http\Controllers\EventsController@getEvent')->name('event');
Route::get('event/{slashData?}', 'App\Http\Controllers\EventsController@getEvent')->where('slashData', '(.*)')->name('event');
Route::get('/info', function () {  return view('pages/info');})->name('info');


//Левое

Auth::routes();
Route::get('/auth', 'App\Http\Controllers\lk\UserAuthController@index')->name('UserAuth');
Route::middleware(['auth'])->prefix('lk')->group( function(){
    Route::get('/', 'App\Http\Controllers\lk\UserPanelController@index')->name('lk');
});

Route::middleware(['role:admin|agent'])->prefix('home')->group( function(){
    Route::get('/', 'App\Http\Controllers\AdminController@getPanel')->name('admin.home');
    Route::get('/delete', 'App\Http\Controllers\AdminController@delOrder')->name('admin.delete');
    Route::get('/restore', 'App\Http\Controllers\AdminController@restore')->name('admin.restore');
    Route::get('/showDeleted', 'App\Http\Controllers\AdminController@getDeleted')->name('admin.showDeleted');
    Route::get('/last', 'App\Http\Controllers\AdminController@lastOrders')->name('admin.last');
});

Route::any('/console', 'App\Http\Controllers\Console@index')->name('console');
Route::middleware(['role:admin'])->prefix('dev')->group( function(){
    Route::get('clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Кэш очищен.";
    });
//     Route::get('migrate', function () {
//         Artisan::call('migrate --fresh'); //возможно, это не безопасно, надо выяснить или удалить при продакшене
//         return "Миграции выполнены";
//     });
//     Route::get('seed', function () {
//         Artisan::call('db:seed'); //возможно, это не безопасно, надо выяснить или удалить при продакшене
//         return "Посев выполнен";
//     });
//     Route::get('rollback', function () {
//         Artisan::call('migrate:rollback');  //возможно, это не безопасно, надо выяснить или удалить при продакшене
//         return "Миграции откачены";
//     });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
