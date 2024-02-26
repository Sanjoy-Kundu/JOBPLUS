<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get("/jobpuls-registration",           [UserController::class, "jobplusRegistration"]);
Route::get("/jobpuls-registration-companies", [UserController::class, "jobplusRegistrationCompanies"]);

Route::get("/jobpuls-login",                  [UserController::class, "jobpulseLogin"])->name("login");
Route::get("/jobpuls-login-admin",            [UserController::class, "jobpulseLoginAdmin"]);

Route::get("/jobpuls-forget-password",        [UserController::class, "jobpulsForgetPassword"]);
Route::get('/jobplus-otp-page',               [UserController::class,"otp"]);
Route::get('/jobpuls-reset-password',         [UserController::class, "resetPasswordFrom"]);

Route::post("/user-login-admin",              [UserController::class, "userLogin"]);
Route::post("/user-login",                    [UserController::class, "userLogin"]);

Route::post("/user-registration-employer", [UserController::class, "userRegistration"]);
Route::post("/user-registration-candidate", [UserController::class, "userRegistration"]);

Route::post("/sendOtp",                     [UserController::class, "sendOtpForForgetPassword"]);
Route::post("/verify-otp",                  [UserController::class, "verifyotpforgetPassword"]);
Route::post("/forget-reset-password-otp",   [UserController::class, "forgetResetPasswordOtp"])->middleware(["auth:sanctum"]);




//user dashboard 
Route::get("/dashboard",            [UserController::class, "dashboard"]);
Route::get("/dashboard-profile",    [UserController::class, "dashboardProfile"]);
Route::get("/user-profile",         [UserController::class, "userProfile"])->middleware(["auth:sanctum"]);
Route::post("/user-profile-update", [UserController::class, "userProfileUpdate"])->middleware(["auth:sanctum"]);
Route::post("/user-password-reset", [UserController::class, "userPasswordReset"])->middleware(["auth:sanctum"]);


// admin dashboard contact 
Route::get("/dashboard-contact",    [ContactController::class,"dashboardContact"]);
Route::get("/web-contact-get", [ContactController::class, "contactGetList"]);
Route::post("/web-contact", [ContactController::class, "webContact"])->middleware(["auth:sanctum"]);
Route::post("/web-contact-update", [ContactController::class, "webContactupdate"])->middleware(["auth:sanctum"]);


//admin dashboard about 
Route::get("/dashboard-about",         [AboutController::class, "dashboardAbout"]);
Route::get("/frontend-about-details",  [AboutController::class, "frontendAboutDetails"]);
Route::get("/dashboard-about-details", [AboutController::class, "webDashboardAboutDetails"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-about-insert", [AboutController::class, "webDashboardAbout"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-about-update", [AboutController::class, "dashboardAboutUpdate"])->middleware(["auth:sanctum"]);


// admin company jobsection 
Route::get("/dashboard-job", [JobController::class, "dashboardJobForm"]);
Route::get("/dashboard-job-lists-page", [JobController::class, "dashboardJoblistPage"]);

//Route::get("/dashboard-job-page", [JobController::class, "dashboardJobPageForm"])->middleware(["auth:sanctum"]);
Route::get("/dashboard-job-lists",       [JobController::class, "dashboardJobList"])->middleware(["auth:sanctum"]);
Route::get("/dashboard-all-job-lists",   [JobController::class, "dashboardAllJobLists"]);
// Route::post("/dashboard-admin-permisson", [JobController::class, "adminPermission"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-job-insert",     [JobController::class, "dashboardJob"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-delete-job",     [JobController::class, "dashboardJobDelete"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-view-job",       [JobController::class, "dashboardViewJob"])->middleware(["auth:sanctum"]);
Route::post("/dashboard-job-update",     [JobController::class, "dashboardJobUpdate"])->middleware(["auth:sanctum"]);


//Frontend 
Route::get("/",        [FrontendController::class, "index"]);
Route::get('/about',   [FrontendController::class,"about"]);
Route::get("/jobs", [FrontendController::class, "jobPage"]);
Route::get("/view-job", [FrontendController::class, "viewJob"]);
Route::get('/contact',   [FrontendController::class,"contactUs"]);



//Frontend job show api call 
Route::get("/alljobs", [FrontendController::class, "allJobShow"]);
