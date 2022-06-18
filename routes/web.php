<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
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


    Route::get('/', [GuestController::class,'home'])->name('guest.home');
    Route::get('/animals', [GuestController::class,'animals'])->name('guest.animals');
    Route::get('/sponsors', [GuestController::class,'sponsors'])->name('guest.sponsors');
    Route::get('/sponsor', [GuestController::class,'sponsor'])->name('guest.sponsor');
    Route::post('/sponsor', [GuestController::class,'createSponsor'])->name('guest.createSponsor');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/admin/animals', [AdminController::class,'animals'])->name('admin.animals');
        Route::get('/admin/sponsorships', [AdminController::class,'sponsorships'])->name('admin.sponsorships');
        Route::get('/admin/sponsors', [AdminController::class,'sponsors'])->name('admin.sponsors');
        Route::post('/admin/createAnimal', [AdminController::class,'createAnimal'])->name('admin.createAnimal');
        Route::post('/admin/updateAnimal', [AdminController::class,'updateAnimal'])->name('admin.updateAnimal');
        Route::post('/admin/deleteAnimal', [AdminController::class,'deleteAnimal'])->name('admin.deleteAnimal');
        Route::post('/admin/updateSponsor', [AdminController::class,'updateSponsor'])->name('admin.updateSponsor');
        Route::post('/admin/deleteSponsor', [AdminController::class,'deleteSponsor'])->name('admin.deleteSponsor');
        Route::post('/admin/createSponsorship', [AdminController::class,'createSponsorship'])->name('admin.createSponsorship');
        Route::post('/admin/updateSponsorship', [AdminController::class,'updateSponsorship'])->name('admin.updateSponsorship');
        Route::post('/admin/deleteSponsorship', [AdminController::class,'deleteSponsorship'])->name('admin.deleteSponsorship');
    });


require __DIR__.'/auth.php';
