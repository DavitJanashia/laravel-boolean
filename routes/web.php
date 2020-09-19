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

Route::get('/welcome', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/', function(){
  require __DIR__ . '/../database/temporary_DB/data.php';
  return view('home', compact('data'));
}) -> name('root');

Route::get('/home', function(){
  require __DIR__ . '/../database/temporary_DB/data.php';
  return view('home', compact('data'));
}) -> name('home');
