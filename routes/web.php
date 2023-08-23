<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Guest\DashboardController as GuestDashboardController;
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

Route::get('/', [GuestDashboardController::class, 'index'])->name('guest.dashboard');;

Auth::routes();

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::get('/create', [DashboardController::class, 'create'])
            ->name('create');
        Route::post('/', [DashboardController::class, 'store'])
            ->name('store');
        Route::get('/project/{project}', [DashboardController::class, 'show'])
            ->name('show');
    });
