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
    return view('welcome');
});

auth()->loginUsingId(36);




Route::get('/home', 'HomeController@index')->name('home');



Route::get('conversations', 'ConversationController@index');
Route::get('conversations/{conversation}', 'ConversationController@show')->middleware('can:view,conversation');
Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');



Auth::routes();



Route::get('/reports', function () {
    return "the secret reports";
})->middleware('can:view_reports');
