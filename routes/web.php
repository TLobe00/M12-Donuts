<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PremadeController;
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

Route::inertia('/', 'Home');
Route::prefix('premade')->group(function () {
    Route::controller(PremadeController::class)->group(function () {
        Route::get('', 'index');
    });
});
