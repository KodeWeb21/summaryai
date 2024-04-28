<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome-demo');
});

Route::get('/summary-demo',function(){
    return view('welcome');
});

Route::get('/frequent',function(){
    return view('frequent');
});

Route::get('/privacy',function(){
    return view('privacy');
});

Route::post('/resume',[apiController::class,"resume"]);