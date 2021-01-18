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
    return view('welcome');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/dashboard-sale', function () {
    return view('pages.dashboard-sale');
});
Route::get('/dashboard-crm', function () {
    return view('pages.dashboard-crm');
});
Route::get('/dashboard-analytics', function () {
    return view('pages.dashboard-analytics');
});
Route::get('/dashboard-project', function () {
    return view('pages.dashboard-project');
});
