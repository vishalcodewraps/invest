<?php

use Illuminate\Support\Facades\Route;
use Modules\Wishlist\App\Http\Controllers\WishlistController;

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

Route::group(['as' => 'buyer.', 'prefix' => 'buyer', 'middleware' => ['auth:web', 'MaintenanceMode']], function () {
    Route::resource('wishlist', WishlistController::class);
});

