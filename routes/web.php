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




Route::get('/', 'tesController@index');
Route::get('/tes/get_user_detail', 'tesController@get_user_detail');
Route::get('/tes/search_repo', 'tesController@search_repo');
Route::get('/tes/get_user_follower', 'tesController@get_user_follower');
Route::get('/tes/get_user_following', 'tesController@get_user_following');
Route::get('/tes/get_repo_starred', 'tesController@get_repo_starred');
Route::get('/tes/get_user_repo', 'tesController@get_user_repo');
Route::get('/tes/get_repo_detail', 'tesController@get_repo_detail');
