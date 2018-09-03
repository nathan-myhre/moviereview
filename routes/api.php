<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api'], function() {
  Route::group(['prefix' => 'reviews'], function() {
//       Route::get('', 'ReviewController@getReviews')->name('api.reviews.getReviews');
//       Route::get('{id}', 'ReviewController@getReview')->name('api.reviews.getReview');
      Route::post('', 'ReviewController@createReview')->name('api.reviews.createReview');
      Route::put('{id}', 'ReviewController@editReview')->name('api.reviews.editReview');
      Route::delete('{id}', 'ReviewController@deleteReview')->name('api.reviews.deleteReview');
      Route::post('{id}/vote', 'ReviewController@addVote')->name('api.reviews.addVote');
  });
});