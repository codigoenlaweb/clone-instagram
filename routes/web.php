<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LikeController;

Route::resource('/coment', ComentController::class);
Route::resource('/image', ImageController::class);
Route::resource('/like', LikeController::class);

