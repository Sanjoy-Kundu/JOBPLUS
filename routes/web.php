<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::post("/user-login-admin", [UserController::class, "userLogin"]);
Route::post("/user-login", [UserController::class, "userLogin"]);

Route::post("/user-registration-employer", [UserController::class, "userRegistration"]);
Route::post("/user-registration-candidate", [UserController::class, "userRegistration"]);

Route::get("/user-profile",        [UserController::class, "userProfile"])->middleware(["auth:sanctum"]);
Route::post("/user-profile-update", [UserController::class, "userProfileUpdate"])->middleware(["auth:sanctum"]);
Route::post("/user-password-reset", [UserController::class, "userPasswordReset"])->middleware(["auth:sanctum"]);