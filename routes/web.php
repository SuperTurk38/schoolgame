<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamsController;
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



Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/mijnprofiel', [PagesController::class, 'mijnprofiel'])->middleware(['auth'])->name('mijnprofiel');

Route::get('file-upload', [FileUploadController::class, 'index'])->middleware(['auth'])->name('mijnprofiel');
Route::post('store', [FileUploadController::class, 'store'])->middleware(['auth']);

Route::group(['prefix' => 'dashboard', 'middelware' => 'auth'], function () {
   Route::resource('teams', TeamsController::class);
});
require __DIR__.'/auth.php';
