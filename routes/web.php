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

Route::get('/', 'IndexController@index')->name('/');

Route::get('alumnus', 'AlumnusController@index')->name('alumnus');
Route::get('alumnus/{alumnu}', 'AlumnusController@show')->name('alumnus.show');

Route::get('abouts', 'AboutsController@index')->name('abouts');

Route::get('courses', 'CoursesController@index')->name('courses');
Route::get('courses/{course}', 'CoursesController@show')->name('courses.show');

Route::get('teachers', 'TeachersController@index')->name('teachers');

Route::get('signs', 'SignsController@index')->name('signs');
Route::post('signs/store', 'SignsController@store')->name('signs.store');

Route::get('contacts', 'ContactsController@index')->name('contacts');

Route::post('boards/store', 'BoardsController@store')->name('boards.store');

Route::get('pages/{page}', 'PagesController@show')->name('pages.show');

Route::get('search', 'SearchController@index')->name('search');

Route::any('fileUpload', 'SignsController@fileUpload')->name('fileUpload');
