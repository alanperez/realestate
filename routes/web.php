<?php

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

// HOME PAGE
Route::get('/', function () {
    return view('pages/home');
});


// All Listings
Route::get('/{property_type}/{listing_type}/{city}', function() {
    return view('pages/listings');
});

// Single Listing
Route::get('/listing/{slug}/{id}', function() {
    return view('welcome');
});

// User Login
Route::get('/login', function() {
    return view('welcome');
});

// User Register
Route::get('/register', function() {
    return view('welcome');
});


// User Saved Listings
Route::get('/account/saved', function() {
    return view('pages/saved-listings');
});

// User Saved Listings
Route::get('/account/show-status', function() {
    return view('pages/show-status');
});