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

// 首页
// Route::get('/','StaticPagesController@home')->name('home');

// 首页测试
Route::get('/', 'PagesController@home')->name('home');


// 用户路由资源
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
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


// 用户主页
Route::get('mycenter/{user:name}/{slug?}', 'MyCentersController@show')
    ->name('mycenter.show');

// 用户资源路由
Route::resource('users', UsersController::class);

// 用户资料完善提醒
Route::get('users/mycenter/perfect', 'UsersController@perfect')
    ->name('users.mycenterperfect');

// 友链
Route::resource('links', LinksController::class);

// 作品分类管理
Route::resource('productioncategories', ProductionCategoriesController::class);

// 作品内容发布
Route::resource('productioncontent', ProductionContentController::class);

// 发布服务
Route::resource('services', ServicesController::class);
