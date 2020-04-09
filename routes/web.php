<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('events','EventController');
Route::resource('templates','TemplateController');
Route::resource('contacts','ContactController');

Route::get('create/{event_id}','MessageController@create')->name('messages.create');
Route::post('create/{event_id}','MessageController@store')->name('messages.store');
Route::resource('messages','MessageController')->except(['create']);


Route::get('ajax/gettemplate','AjaxController@getTemplateContent')->name('template.get');
Route::get('ajax/getcontact','AjaxController@getContactContent')->name('contact.get');




