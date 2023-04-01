<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//CRUD Book
Route::get("Book/{id?}", [BookController::class, 'index']);
Route::get("Book/Comment/{id}", [BookController::class, 'comment']);
Route::post("Book", [BookController::class, 'store']);
Route::put("Book/{id}", [BookController::class, 'update']);
Route::delete("Book/{id}", [BookController::class, 'delete']);

//CRUD Comment
Route::post("Comment", [CommentController::class, 'store']);
Route::put("Comment", [CommentController::class, 'update']);
Route::delete("Comment", [CommentController::class, 'delete']);
