<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

Route::resource('/form', FormController::class);
Route::get('/thank-you/{uid?}', [FormController::class,'thanks'])->name('thank.you');
Route::resource('/dashboard', DashboardController::class);
Route::get('/trash', [DashboardController::class, 'trash'])->name('trash.index');
Route::get('/status-update/{id}', [DashboardController::class, 'updateStatus'])->name('status.update');
Route::get('/trash-update/{id}', [DashboardController::class, 'updateTrash'])->name('trash.update');
