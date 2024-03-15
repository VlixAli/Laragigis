<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - show form to edit listing
// update - Update listing
// destroy - Delete listing

Route::controller(ListingController::class)->group(function () {
    Route::get('/', 'index');

    Route::prefix('/listings')->group(function () {
        Route::middleware('auth')->group(function () {
            //show create form
            Route::get('/create', 'create');

            Route::post('/', 'store');

            //show edit form
            Route::get('/{listing}/edit', 'edit');

            //Update Listing
            Route::put('/{listing}', 'update');

            //Delete listing
            Route::delete('/{listing}', 'destroy');

            //Manage Listings
            Route::get('/manage', 'manage');
        });

        //Show single listing
        Route::get('/{listing}', 'show');
    });

});

Route::controller(UserController::class)->group(function () {

    Route::middleware('guest')->group(function () {
        //Show Register/Create form
        Route::get('/register', 'create');

        //Create new user
        Route::post('/users', 'store');

        //Show login Form
        Route::get('/login', 'login')->name('login');

        //login user
        Route::post('/users/authenticate', 'authenticate');
    });

    //log user out
    Route::post('/logout', 'logout')->middleware('auth');

});



