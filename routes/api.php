<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*==============================================================*/
/*=                                                            =*/
/*=                     Payment Systems API                    =*/
/*=                                                            =*/
/*==============================================================*/

Route::get('/payment_systems', 'PaymentSystemsController@index');
Route::post('/payment_systems', 'PaymentSystemsController@store');
Route::put('/payment_systems/{id}', 'PaymentSystemsController@update');
Route::delete('/payment_systems/{id}', 'PaymentSystemsController@delete');

/*==============================================================*/
/*=                                                            =*/
/*=                        Bot Users API                       =*/
/*=                                                            =*/
/*==============================================================*/

Route::get('/bot_users', 'BotUserController@index');
Route::get('/bot_users/{id}', 'BotUserController@byID');
Route::get('/bot_users/uid/{user_id}', 'BotUserController@byUserID');
Route::get('/bot_users/rid/{user_id}', 'BotUserController@byReferID');
Route::post('/bot_users', 'BotUserController@store');
Route::put('/bot_users/{id}', 'BotUserController@update');
Route::delete('/bot_users/{id}', 'BotUserController@delete');

/*==============================================================*/
/*=                                                            =*/
/*=                          Bills API                         =*/
/*=                                                            =*/
/*==============================================================*/

Route::get('/bills', 'BillsController@index');
Route::get('/bills/uid/{user_id}', 'BillsController@byUserID');
Route::post('/bills', 'BillsController@store');
Route::put('/bills/{id}', 'BillsController@update');
Route::delete('/bills/{id}', 'BillsController@delete');

/*==============================================================*/
/*=                                                            =*/
/*=                        Withdraws API                       =*/
/*=                                                            =*/
/*==============================================================*/

Route::get('/withdraws', 'WithdrawsController@index');
Route::get('/withdraws/uid/{user_id}', 'WithdrawsController@byUserID');
Route::post('/withdraws', 'WithdrawsController@store');
Route::put('/withdraws/{id}', 'WithdrawsController@update');
Route::delete('/withdraws/{id}', 'WithdrawsController@delete');
