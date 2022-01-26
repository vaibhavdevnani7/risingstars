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
//     return view('welcome');
// });
Route::get('/', 'WebController@posts');
// Route::get('/about-us', 'WebController@aboutUs');
Route::get('/about-us', 'WebController@home');
Route::get('/raise-fund', 'WebController@raiseFund');
Route::get('/be-partner', 'WebController@bePartner');
Route::post('partner/store', 'PartnerController@store');
Route::post('investee/store', 'InvesteeController@store');
Route::post('subscribe-us', 'ActionController@subscribeUs');
Route::post('contact-us', 'ActionController@contactUs');
Route::get('g_redirect', 'SocialController@gRedirect');
Route::get('g_callback', 'SocialController@gCallback');
Route::get('auth/twitter', 'SocialController@loginwithTwitter');
Route::get('auth/callback/twitter', 'SocialController@cbTwitter');
Route::get('/linkedin-redirect', 'SocialController@linkeDinRedirect');
Route::get('/linkedin-callback', 'SocialController@linkeDinCallback');

Route::get('/twitter-redirect', 'SocialController@twitterRedirect');
Route::get('/callback/twitter', 'SocialController@twitterCallback');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/add-product', 'ProductController@addProduct')->middleware('auth')->middleware('verified');
Route::post('/product/store', 'ProductController@store')->middleware('auth')->middleware('verified');
Route::get('product/detail/{slag}', 'ProductController@detail');
Route::get('/my-products', 'ProductController@myProducts')->middleware('auth')->middleware('verified');
Route::post('/product/upvote', 'ProductController@upvote')->middleware('auth')->middleware('verified');
Route::post('/product/comment', 'ProductController@comment')->middleware('auth')->middleware('verified');
Route::post('/product/discussions', 'ProductController@discussions');
Route::post('/discussion_like', 'ProductController@discussionLike');
Route::post('/discussion/reply', 'ProductController@discussionReply')->middleware('auth')->middleware('verified');


