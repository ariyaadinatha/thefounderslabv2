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


Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/home', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/webinar', 'PageRequestController@viewWebinar');
Route::get('/registration', 'PageRequestController@viewRegistrasi');


/*Coming Soon*/
Route::get('/startup', 'PageRequestController@viewComingSoon');
Route::get('/incubator', 'PageRequestController@viewComingSoon');
Route::get('/mentor', 'PageRequestController@viewComingSoon');
Route::get('/research', 'PageRequestController@viewComingSoon');
Route::get('/fundingfrenzy', 'PageRequestController@viewComingSoon');
Route::get('/space', 'PageRequestController@viewComingSoon');

Route::get('/community', 'PageRequestController@viewComingSoon');
Route::get('/cofound', 'PageRequestController@viewComingSoon');
Route::get('/team', 'PageRequestController@viewComingSoon');
Route::get('/intern', 'PageRequestController@viewComingSoon');

Route::get('/podcast', 'PageRequestController@viewComingSoon');
Route::get('/subscribe', 'PageRequestController@viewComingSoon');
Route::get('/hall', 'PageRequestController@viewComingSoon');
Route::get('/course', 'PageRequestController@viewComingSoon');


/* Article */


Route::get('/article', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@show')->name('article.articleSingle');


/* Webinar */
Route::get('/create/new/webinar', 'EventController@create');
Route::post('/webinar/store', 'EventController@store');
