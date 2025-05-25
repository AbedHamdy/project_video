<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;
// use App\Http\Controllers\Amdin\AdminController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get("/login" , [LoginController::class, "index"])->name("login");
Route::post("/login-process" , [LoginController::class, "loginProcess"])->name("login_process");

// Route::get("/dashboard" , [AdminController::class, "index"])->name("dashboard");
Route::get("/dashboard" , [DashboardController::class, "index"])->name("dashboard");

Route::get("/videos/create" , [VideoController::class, "create"])->name("create_video");

Route::post("/videos/store" , [VideoController::class, "store"])->name("store_video");