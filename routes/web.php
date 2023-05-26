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


Route::get('/multi-selection', function(){
    return view('multi-select');
});


Route::get('/star-rating', function(){
    return view('star-rating');
});


Route::get('/chat-room', function(){
    return view('chat-room-component');
});

Route::get('/toggle-switch', function(){
    return view('toggle-switch-component');
});

Route::get('/sweet-alert', function(){
    return view('sweet-alert-dialogs');
});

Route::get('/drag-drop', function(){
    return view('drag-drop-table');
});

Route::get('/create-fly', function(){
    return view('create-on-fly');
});

Route::get('/unique-dropdown', function(){
    return view('unique-dropdown-component');
});

Route::get('/date-picker',function(){
    return view('date-picker-pikaday');
});