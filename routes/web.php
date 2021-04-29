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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/homeProfile', 'homeProfileController@index')->name('homeProfile');

Route::get('/beli', 'BeliController@index')->name('beli');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/jual', 'JualController@index')->name('jual');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
// Route::get('/login', 'LoginController@index')->name('Auth.login');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/createad1', 'Createad1Controller@index')->name('createad1');
Route::get('/createad2', 'Createad2Controller@index')->name('createad2');
Route::get('/createad3', 'Createad3Controller@index')->name('createad3');

Route::get('/createad4', 'Createad4Controller@index')->name('createad4');
Route::get('/finalcreatead', 'FinalcreateadController@index')->name('finalcreatead');
Route::get('/userprofile', 'UserprofileController@index')->name('userprofile');
Route::get('/editProfile', 'EditprofileController@index')->name('editProfile');
Route::get('/detailbarang', 'detailbarangController@index')->name('detailbarang');
Route::get('/Detail', 'DetailController@index')->name('Detail');
Route::get('/Piklan', 'PiklanController@index')->name('Piklan');
Route::get('/Draftiklan', 'DraftiklanController@index')->name('Draftiklan');

Route::get('/paymentConfirm', 'paymentConfirmController@index')->name('paymentConfirm');

Route::get('/profile_online', 'profile_onlineController@index')->name('profile_online');



