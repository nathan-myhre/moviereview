<?php

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

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'api'], function() {
    Route::group(['prefix' => 'reviews'], function() {
        Route::get('', 'ReviewController@getReviews')->name('reviews.getReviews');
        Route::get('{id}', 'ReviewController@getReview')->name('reviews.getReview');
        Route::post('', 'ReviewController@createReview')->name('reviews.createReview');
        Route::put('{id}', 'ReviewController@editReview')->name('reviews.editReview');
        Route::delete('{id}', 'ReviewController@deleteReview')->name('reviews.deleteReview');
        Route::post('{id}/vote', 'ReviewController@addVote')->name('reviews.addVote');
    });


    Route::group(['prefix' => 'movies'], function() {
        Route::get('', 'MovieController@findMovies')->name('movies.findMovies');
        Route::get('{id}', 'MovieController@getMovieDetails')->name('movies.getMovieDetails');
    });
});