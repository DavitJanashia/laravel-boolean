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
});

Route::get('/', function(){

    // $hello = 'hello world ';
    // // $from = 'from boolean';
    // $records = [1,2];
    // $x = [10, 20, 30, 40, 50];

    return view('home');
    // return view('home', compact('hello', 'from', 'records', 'x'));
    // return view('home', ['hello' => 'hello world from boolean']);
}) -> name('home');


Route::get('/home', function(){
  return view('home');
    // return view('home', compact('hello', 'from', 'records', 'x'));
    // return view('home', ['hello' => 'hello world from boolean']);
}) -> name('home');
