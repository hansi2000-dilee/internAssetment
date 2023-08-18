<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentViewController;
use Illuminate\Support\Facades\Route;

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

//home page
Route::get('/', [Homecontroller::class, "index"])->name('home');

//student page
Route::prefix('/student')->group(function(){
    Route::get('/', [StudentController::class, "index"])->name('student');
    Route::post('/store', [StudentController::class, "store"])->name('student.store');

});

//student view page
Route::prefix('/studentView')->group(function (){
    Route::get('/', [StudentViewController::class, "index"])->name('studentView');
    Route::get('/{studentView_id}/delete', [StudentViewController::class, "delete"])->name('studentView.delete');
    Route::get('/{studentView_id}/status', [StudentViewController::class, "status"])->name('studentView.status');
    Route::post('/{studentView_id}/update', [StudentViewController::class, "update"])->name('studentView.update');
    Route::get('/edit', [StudentViewController::class, "edit"])->name('studentView.edit');
   


});
