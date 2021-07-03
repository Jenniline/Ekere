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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/','EkereController@index')->name('indexonhomepage');



Route::group(['prefix' => '/Ekere', 'as' => ''], function () {
    Route::get('', 'EkereController@index')->name('index');
    Route::get('listings-index', 'ListingController@listingsindex')->name('listings-index');
    Route::get('agents-index', 'AgentController@agentsindex')->name('agents-index');
    Route::get('single-agent', 'EkereController@singleagent')->name('single-agent');
    Route::get('contact', 'EkereController@contact')->name('contact');
    Route::get('agent-rules-modal', 'AgentController@agentRulesModal')->name('agent-rules-modal');
    
    //Agent  Controllers
    Route::get('sign-up-agent', 'AgentController@signUpAgentForm')->name('sign-up-agent-form');
    Route::post('store-agent', 'AgentController@storeAgent')->name('store-agent');
    Route::get('agent-single', 'AgentController@agentSingle')->name('agent-single');
        
    //listing  Controllers
    Route::get('create-listing', 'ListingController@createlisting')->name('create-listing');
    Route::post('store-listing', 'ListingController@storeListing')->name('store-listing');

    
});
    
    // Route::get('profile', function () {
    //  // Only verified users may enter...
    //    Route::get('create-a-listing', 'ListingController@createlisting')->name('create-a-listing');

    // })->middleware('verified'); 


Auth::routes();
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
