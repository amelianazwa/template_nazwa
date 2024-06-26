<?php
use App\Http\Controllers\UserController;

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

Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});


Route::get('/', function () {
    return view('home');
});


Auth::routes(

);

Route::get('data', function () {
    return view('data');

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

