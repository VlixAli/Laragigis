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

Route::get('/',[ListingController::class, 'index'] );


//show create form
Route::get('/listings/create',[ListingController::class,
    'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])
    ->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('/listings/{listing}', [ListingController::class,
'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class,
    'destroy'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class,
    'manage'])->middleware('auth');

//Show single listing
Route::get('/listings/{listing}',
    [ListingController::class, 'show']);

//Show Register/Create form
Route::get('/register',
    [UserController::class, 'create'])->middleware
('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//log user out

Route::post('/logout', [UserController::class, 'logout'])
    ->middleware('auth');

//Show login Form
Route::get('/login', [UserController::class, 'login'])
->name('login')->middleware
    ('guest');

//login user
Route::post('/users/authenticate', [UserController::class,
    'authenticate']);

//Manage Listings

