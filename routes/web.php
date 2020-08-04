<?php
/*
laravel new project-name
artisan serve
artisan make:controller

http://127.0.0.1:8001
http://127.0.0.1:8001/?name=Winston
http://127.0.0.1:8001/?name=<script>alert('foobar')</script>
*/
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

Route::get('/', 'pagesController@home');

Route::get('/about', 'pagesController@about');

Route::get('/contact', 'pagesController@contact');
