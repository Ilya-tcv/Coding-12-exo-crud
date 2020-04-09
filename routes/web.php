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


// -----------------------------------------------------------------------------------
// MAIN
    // Show
Route::get('/','AllController@show')->name('main');


// NAVBAR DATACHANGER
Route::get('/database', function(){
    return view('database.index');
});


// -----------------------------------------------------------------------------------
// About
    // Show
Route::get('/database/about', 'AboutController@show')->name('about');
    // Delete
Route::get('/database/about/{id}/destroy', 'AboutController@destroy');
    // Edit
Route::get('/database/about/{id}/edit', 'AboutController@edit');
Route::post('/database/about/{id}/update', 'AboutController@update');
    // Create
Route::get('/database/about/create', 'AboutController@create')->name('about.create');
Route::post('/database/about/save', 'AboutController@save')->name('about.save');
// -----------------------------------------------------------------------------------
// Service
    // Show
Route::get('/database/services', 'ServiceController@show')->name('services');
// Delete
Route::get('/database/services/{id}/destroy', 'ServiceController@destroy');
// Edit
Route::get('/database/services/{id}/edit', 'ServiceController@edit');
Route::post('/database/services/{id}/update', 'ServiceController@update');
// Create
Route::get('/database/services/create', 'ServiceController@create')->name('service.create');
Route::post('/database/services/save', 'ServiceController@save')->name('service.save');
// -----------------------------------------------------------------------------------
// Portfolio
    // Show
Route::get('/database/portfolio', 'PortfolioController@show')->name('portfolio');
    // Delete
Route::get('/database/portfolio/{id}/destroy', 'PortfolioController@destroy');
    // Edit
Route::get('/database/portfolio/{id}/edit', 'PortfolioController@edit');
Route::post('/database/portfolio/{id}/update', 'PortfolioController@update');
    // Create
Route::get('/database/portfolio/create', 'PortfolioController@create')->name('portfolio.create');
Route::post('/database/portfolio/save', 'PortfolioController@save')->name('portfolio.save');
// -----------------------------------------------------------------------------------
// Testimonial
    // Show
Route::get('/database/testimonials', 'TestimonialController@show')->name('testimonial');
    // Delete
Route::get('/database/testimonials/{id}/destroy', 'TestimonialController@destroy');
    // Edit
Route::get('/database/testimonials/{id}/edit', 'TestimonialController@edit');
Route::post('/database/testimonials/{id}/update', 'TestimonialController@update');
    // Create
Route::get('/database/testimonials/create', 'TestimonialController@create')->name('testimonial.create');
Route::post('/database/testimonials/save', 'TestimonialController@save')->name('testimonial.save');
// -----------------------------------------------------------------------------------
// Team
    // Show
Route::get('/database/team', 'TeamController@show')->name('team');
    // Delete
Route::get('/database/team/{id}/destroy', 'TeamController@destroy');
    // Edit
Route::get('/database/team/{id}/edit', 'TeamController@edit');
Route::post('/database/team/{id}/update', 'TeamController@update');
    // Create
Route::get('/database/team/create', 'TeamController@create')->name('team.create');
Route::post('/database/team/save', 'TeamController@save')->name('team.save');
// -----------------------------------------------------------------------------------
// Contact
    // Show
Route::get('/database/messages', 'ContactController@show')->name('messages');
    // Delete
Route::get('/database/messages/{id}/destroy', 'ContactController@destroy');
    // Create
Route::post('/database/messages/save', 'ContactController@store')->name('message.save');