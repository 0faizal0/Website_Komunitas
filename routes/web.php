<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ChatsController;
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


Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeuser', function () {
    return view('homeuser');
})->name('homeuser');

Auth::routes();

Route::group(['/admin'], function () {
    Route::get('/admin', [MemberController::class,'show'])->name('dashboardadmin');
 });

 Route::get('role-edit/{id}', [App\Http\Controllers\Auth\RegisterController::class,'edit']);
 Route::put('role-update/{id}', [App\Http\Controllers\Auth\RegisterController::class,'update']);
 Route::get('delete/{id}', [App\Http\Controllers\Auth\RegisterController::class,'delete']);
 Route::get('view/{id}', [App\Http\Controllers\Auth\RegisterController::class,'view']);
 Route::get('status-update/{id}', [App\Http\Controllers\Auth\RegisterController::class,'status_update']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chatting', function () {
    return view('chatting');
})->name('chatting');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/group', [App\Http\Controllers\ChatsController::class, 'index'])->name('group');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/list',[MemberController::class,'show']);

Route::get('status/{id}', [App\Http\Controllers\HomeController::class, 'status'])->name('status');

Route::group(['middleware' => ['auth','isUser']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth']], function() {

    Route::post('avatar/profile', [App\Http\Controllers\ProfileController::class, 'update_avatar'])
    ->name('profile.update_avatar');

    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('profile.edit');

        // WARNING SHOULD GET THIS DONE FIRST!!!!!
        //this should be not post in order to defined the image post[to make image working]
    Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function() {
//     return Inertia\Inertia::render('Chat/container');
// }) ->name('chat');

// Route::middleware('auth:sanctum')->get('/chat/rooms', [ChatController::class, 'rooms']);
// Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages', [ChatController::class, 'messages']);
// Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message', [ChatController::class, 'newMessage']);