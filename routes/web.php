<?php
use  \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thttController;

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

Route::get('/thtt', function(){
    return view('thtt');
});

Route::post('/thtt',[thttController::class, 'thtt'])->name('thtt');

Route::get('/index', function(){
    return view('index');
});