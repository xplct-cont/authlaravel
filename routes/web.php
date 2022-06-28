<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
    return view('landing');
});


Route::get('/login', function(){
    if(!auth()->guest()){
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/users', [AuthController::class, 'users']);
});
Route::get('/logout', [AuthController::class, 'logout']);
