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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', 'CreazioneController@Equipe')->name('apropos');
Route::get('/contact', 'CreazioneController@Contact')->name('contact');
Route::get('/portfolio', 'CreazioneController@Portfolio')->name('portfolio');
Route::get('/', 'CreazioneController@Acceuil')->name('acceuil');
Route::post('/sendmail', 'CreazioneController@SendMail')->name('mail');
Route::post('/mailcontact', 'CreazioneController@Contacter')->name('contact');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
