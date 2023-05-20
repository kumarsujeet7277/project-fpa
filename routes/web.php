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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post-comment', function(){
    return view('post-cmt');
});

Route::get('/quiz-question', function(){
    return view('quiz-question-ask');
});


Route::get('/pagination',function(){
    return view('pagination-view');
});
