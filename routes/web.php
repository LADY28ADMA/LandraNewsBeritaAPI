<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdminRole;

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

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/logout', function () {
//     return view('home');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/vehicle', [PortofolioController::class, 'shoporto'])->name('shoporto');
// Route::get('/login', [UserProfileController::class, 'showLogin'])->name('login');
// Route::get('/dashboard', [UserProfileController::class, 'dashboard'])->name('dashboard');
// Route::post('/logout', [UserProfileController::class, 'logout'])->name('logout');
// Route::get('/reset', [UserProfileController::class,'show_reset'])->name('reset_password');
// // router admin
// Route::get('/portouser', [PortofolioController::class, 'show_portofolioss'])->name('show_portofolioss');
// Route::get('/feed', [PortofolioController::class, 'showFeed'])->name('showFeed');
// Route::get('/feed2', [PortofolioController::class, 'showFeed'])->name('showFeed');
// Route::get('/dashall', [AdminViewController::class, 'dashminn']);
// Route::get('/userall', [AdminViewController::class, 'dashuser']);
// Route::get('/portoall', [AdminViewController::class, 'dashporto']);
// Route::get('/ctgory', [AdminViewController::class,'dashcatego']);
// Route::post('update/{id_porto}', [PortofolioController::class, 'update_porto'])->name('update_porto');

// Route::middleware(['auth', CheckAdminRole::class])->group(function () {
//     Route::get('/userall', [UserProfileController::class, 'show_profile']);
//     Route::get('/portoall', [PortofolioController::class, 'show_portoalle']);
//     Route::get('/ctgory', [CategoryController::class, 'show_category']);
//     Route::get('/dashall', [UserProfileController::class, 'show_statProfile']);
// });
