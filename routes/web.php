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
Route::get("/jobpuls-registration", [UserController::class, "jobplusRegistration"]);
Route::get("/jobpuls-registration-companies", [UserController::class, "jobplusRegistrationCompanies"]);
Route::get("/jobpuls-login", [UserController::class, "jobpulseLogin"]);
Route::get("/jobpuls-forget-password", [UserController::class, "jobpulsForgetPassword"]);
Route::get('/jobplus-otp-page', [UserController::class,"otp"]);




Route::post("/user-login-admin", [UserController::class, "userLogin"]);
Route::post("/user-login", [UserController::class, "userLogin"]);



Route::post("/user-registration-employer", [UserController::class, "userRegistration"]);
Route::post("/user-registration-candidate", [UserController::class, "userRegistration"]);



Route::get("/user-profile",         [UserController::class, "userProfile"])->middleware(["auth:sanctum"]);
Route::post("/user-profile-update", [UserController::class, "userProfileUpdate"])->middleware(["auth:sanctum"]);
Route::post("/user-password-reset", [UserController::class, "userPasswordReset"])->middleware(["auth:sanctum"]);



Route::post("/sendOtp",                     [UserController::class, "sendOtpForForgetPassword"]);
Route::post("/verify-otp",                  [UserController::class, "verifyotpforgetPassword"]);
Route::post("/forget-reset-password-otp",   [UserController::class, "forgetResetPasswordOtp"])->middleware(["auth:sanctum"]);



