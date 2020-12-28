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


/* Medium */
Route::get('/article', 'MediumController@articleIndex');
Route::get('/article/{medium:slug}', 'MediumController@articleShow')->name('article.articleSingle');
Route::get('/medium/create', 'MediumController@create');
Route::post('/medium/store', 'MediumController@store');


/* Adm00n */
Route::get('/adm00n', 'Adm00nController@index');

/* Event */
Route::get('/event', 'EventController@viewIndex');
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');


