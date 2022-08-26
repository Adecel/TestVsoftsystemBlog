<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// naming convention

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create now listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing.


//all listings (my reminder "naming convintion")
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Edit Submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Register/Create Form
//this /register must be check !!!!!!!!!!!!!!!!!!
Route::get('/register', [UserController::class, 'createRegister']);

// Create New User
Route::post('/users', [UserController::class, 'storeUser']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);

// Login Form
Route::get('/login', [UserController::class, 'login']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
