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


Route::get('/posts', function(){
    return view('posts');
})->name('posts');

Route::get('/companies', function(){
    return view('companies');
})->name('companies');


Route::get('/add-product', function(){
    return view('add-product');
})->name('add-product');

Route::get('/post-comment', function(){
    return view('post-cmt');
})->name('post-comment');

Route::get('/quiz-question', function(){
    return view('quiz-question-ask');
})->name('quiz-question');


Route::get('/pagination',function(){
    return view('pagination-view');
})->name('pagination');


Route::get('/multi-selection', function(){
    return view('multi-select');
})->name('multi-selection');


Route::get('/star-rating', function(){
    return view('star-rating');
})->name('star-rating');


Route::get('/chat-room', function(){
    return view('chat-room-component');
})->name('chat-room');

Route::get('/toggle-switch', function(){
    return view('toggle-switch-component');
})->name('toggle-switch');

Route::get('/sweet-alert', function(){
    return view('sweet-alert-dialogs');
})->name('sweet-alert');

Route::get('/drag-drop', function(){
    return view('drag-drop-table');
})->name('drag-drop');

Route::get('/create-fly', function(){
    return view('create-on-fly');
})->name('create-fly');

Route::get('/unique-dropdown', function(){
    return view('unique-dropdown-component');
})->name('unique-dropdown');

Route::get('/date-picker',function(){
    return view('date-picker-pikaday');
})->name('date-picker');

Route::get('/generate-password', function(){
    return view('generate-password-component');
})->name('generate-password');


Route::get('/password-strength', function(){
    return view('password-strength-indicator');
})->name('password-strength');

Route::get('/file-upload', function(){
    return view('file-upload-filepond');
})->name('file-upload');



// all component link

Route::get('/all-link', function(){
    return view('all-component-link');
});




Route::get('/all-component', function(){
    return view('all-component');
});