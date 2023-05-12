<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\ItemStatisticController;
use App\Http\Controllers\API\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('/signup', [SignupController::class, 'signup'])->name('auth.signup');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
    Route::get('me', [AuthController::class, 'me'])->name('auth.me');
});

Route::group(['middleware' => 'auth:api'], function ($router) {
    Route::resource('items', ItemController::class)->only(['index', 'store', 'show']);
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'items/statistics'], function ($router) {
    Route::get('total-price', [ItemStatisticController::class, 'total_price'])->name('items.statistics.total_price');
    Route::get('average-price', [ItemStatisticController::class, 'average_price'])->name('items.statistics.average_price');
});
