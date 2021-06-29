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

Route::get('/', 'GuestbookController@getRecords')->name('main');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::post('/guestbook/record', 'GuestbookController@addRecord')->name('record-form');

Route::get('/guestbook/record/{$id}/upload', 'GuestbookController@uploadRecord')->name('uploadRecordform');
Route::get('/guestbook/record/{$id}/show', 'GuestbookController@showRecord')->name('showRecord');
Route::post('/guestbook/record/{$id}/uploadSubmit', 'GuestbookController@uploadRecordSubmit')->name('uploadRecordSubmit');
Route::get('/guestbook/record/{$id}/delete', 'GuestbookController@deleteRecord')->name('deleteRecord');


