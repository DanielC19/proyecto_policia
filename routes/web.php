<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('officers', OfficerController::class);
    Route::get('deleted/officers', [OfficerController::class, 'deleted'])->name('officers.deleted');
    Route::resource('equipment', EquipmentController::class);
    Route::get('deleted/equipment', [EquipmentController::class, 'deleted'])->name('equipment.deleted');
    Route::get('most_guns', [FunctionsController::class, 'most_guns'])->name('most_guns');
    Route::post('officers_guns', [FunctionsController::class, 'officers_guns'])->name('officers_guns');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
