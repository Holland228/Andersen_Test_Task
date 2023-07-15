<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCommentController;

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

Route::get('/user-comment', [UserCommentController::class, 'show']);

Route::post('/user-comment/create', [UserCommentController::class, 'create']);
