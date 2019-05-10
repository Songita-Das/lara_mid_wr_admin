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


Route::get('/', function () {
    return view('website.pages.home');
});
Route::get('/about', function () {
    return view('website.pages.about');
});
Route::get('/service', function () {
    return view('website.pages.service');
});
Route::get('/admin/home', function () {
    return view('admin.pages.home');
});
Route::get('/admin/student-list', function () {
    return view('admin.pages.student-list');
});
Route::get('/admin/student-add', function () {
    return view('admin.pages.student-add');
});
Route::get('admin/login', function () {
    return view('admin.pages.login');
});

Route::post('store-login', 'AuthController@login') ;
Route::get('/page','UserController@view page');

