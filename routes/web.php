<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/view_room', [AdminController::class,'view_room']);

Route::post('/add_room', [AdminController::class,'add_room']);

Route::get('/show_room', [AdminController::class,'show_room']);

Route::get('/delete_room/{id}', [AdminController::class,'delete_room']);

Route::get('/update_room/{id}', [AdminController::class,'update_room']);

Route::post('/update_room_confirm/{id}', [AdminController::class,'update_room_confirm']);

Route::get('/room_details/{id}', [HomeController::class, 'room_details']);

route::post('/reservation/{id}',[HomeController::class,'reservation']);

route::get('/myreservation',[AdminController::class,'reservations']);

route::get('/userchart',[AdminController::class,'userchart']);


