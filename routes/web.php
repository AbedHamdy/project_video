<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view("user.views.home");
// });

Route::get("/" , [HomeController::class, "index"])->name("home");

Route::get("/video" , [VideoController::class, "index"])->name("video");

Route::get("/video/{id}" , [VideoController::class, "show"])->name("show_video");

Route::post("/comment/create" , [CommentController::class, "store"])->name("create_comment");
