<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;


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

/*
       Reference --> https://www.itsolutionstuff.com/post/laravel-8-cron-job-task-scheduling-tutorialexample.html
*/

Route::get('user-lists', [UserController::class, 'user_lists'])->name('user-lists');
Route::get('quote-lists', [QuoteController::class, 'quote_lists'])->name('quote-lists');