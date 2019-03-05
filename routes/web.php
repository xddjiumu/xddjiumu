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
// Auth::routes();
// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// Route::get('/', 'PagesController@root')->name('root');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

Route::get('/', function () { return view('xdd.index'); });
Route::get('/brand', function () { return view('xdd.ppai_01'); });
Route::get('/about', function () { return view('xdd.ppai_02'); });
Route::get('/idea', function () { return view('xdd.ppai_03'); });
Route::get('/honor', function () { return view('xdd.ppai_04'); });

Route::get('/product', function () { return view('xdd.ppcanp_01'); });
Route::get('/products', function () { return view('xdd.ppcanp_01_02'); });

Route::get('/productt', function () { return view('xdd.ppcanp_02'); });
Route::get('/productts', function () { return view('xdd.ppcanp_02_02'); });

Route::get('/producs', function () { return view('xdd.ppcanp_03'); });
Route::get('/producf', function () { return view('xdd.ppcanp_04'); });

Route::get('/solution', function () { return view('xdd.ppd-jjfa'); });

Route::get('/news', function () { return view('xdd.ppd-news_01'); });
Route::get('/newsone', function () { return view('xdd.ppd-news_02'); });

Route::get('/marketing', function () { return view('xdd.ppd-ninter_01'); });
Route::get('/marketingone', function () { return view('xdd.ppd-ninter_02'); });

Route::get('/cuservice', function () { return view('xdd.ppd-nkefu_01'); });
Route::get('/cuserviceone', function () { return view('xdd.ppd-nkefu_02'); });
Route::get('/cuserviceflo', function () { return view('xdd.ppd-nkefu_03'); });

Route::get('/case', function () { return view('xdd.ppd-nkkaces_01'); });
Route::get('/caseone', function () { return view('xdd.ppd-nkkaces_02'); });

Route::resource('contactus', 'ContactusController', ['only' => ['index', 'store']]);


Route::get('/contactusone', function () { return view('xdd.ppd-nkkaz_cc02'); });

Route::get('/securitycode', function () { return view('xdd.ppd-nkkaz_securitycode'); });

Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);