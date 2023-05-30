<?php

use App\Http\Controllers\EventController;
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

Route::get('/',[EventController::class,'index'])->name('index');

Route::get('Event',[EventController::class,'Event'])->name('Event');

Route::get('show',[EventController::class,'show'])->name('show');

Route::post('Event',[EventController::class,'PostEvent'])->name('PostEvent');

Route::get('edit/{id}',[EventController::class,'edit'])->name('edit');

Route::put('update/{id}',[EventController::class,'update'])->name('update');

Route::delete('delete/{id}',[EventController::class,'delete'])->name('delete');

