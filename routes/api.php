<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsFeedsController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\UserProfileController;
use App\Models\newsfeeds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('auth')->post('/create_porto/{id}', 'PortofolioController@create_porto');


Route::prefix('newss')->as('newss.')->controller(NewsFeedsController::class)->group(function(){
    Route::post('up/{id}', 'create_news');
    Route::post('update/{id}', 'update_news');
    Route::post('del/{id}', 'delete_news');
    Route::post('serc', 'search_news');
    Route::get('feeds', 'get_all_news');
    Route::get('alfeeds', 'all_news');
    Route::get('lefstel', 'getLifestyleNews');
    Route::get('nonlefst', 'getNonLifestyleNews');
});



Route::prefix('regs')->as('regs.')->controller(UserProfileController::class)->group(function(){
    Route::post('update/{id}', [UserProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('updtprof/{id}', 'update_profile');
    Route::get('show', [UserProfileController::class, 'show_profile'])->name( 'show_profile' );
    Route::get('user', [UserProfileController::class, 'get_user'])->name('get_user');
    Route::post('login', [UserProfileController::class, 'login'])->name('login');
    Route::post('register',[UserProfileController::class, 'create_user'])->name('register');
    Route::post('logout',[UserProfileController::class, 'logout'])->name('logout');
    Route::post('reset', [UserProfileController::class, 'reset_password'])->name('reset_password');
});



