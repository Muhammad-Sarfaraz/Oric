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

/**
 * Frontend Routes List 
 * @Frontend 
 * @Custom Routes .php
 * @created by sarfarz
 */

use App\Http\Controllers\Backend\SliderController;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/','HomeController@index');
    Route::get('/gallery','HomeController@gallery');
    Route::get('/how_to_apply','HomeController@HowToApply')->name('how.to.apply');
    Route::get('/tution_and_fees','HomeController@TutionAndFees')->name('tution.and.fees');
    Route::get('/age_requirement','HomeController@requirement')->name('age.requirement');
    Route::get('/faq','HomeController@faq');
    Route::get('/activities','HomeController@activities');
    Route::get('/gallery','HomeController@gallery');
    Route::get('/notice','HomeController@notice')->name('notice');
    Route::get('/contact_us','HomeController@contactUS')->name('contact');
    Route::get('/starter',function(){
        return view('starter');
    });
    Route::get('result','ParentsController@public_result');
    
});

Route::get('/slider','Backend\SliderController@index');

/**
 * @For Parents
 */

