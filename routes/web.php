<?php

use App\Http\Controllers\Dashboard\AchievementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\FinanciallyController;
use App\Http\Controllers\Dashboard\JobController;
use App\Http\Controllers\Dashboard\MeetingController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PublicAssociationController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\PolicyController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('front.index');
});
Route::get('/مجلس الادارة', function () {
    return view('front.team');
})->name('team');

Route::get('/الجمعية العمومية', function () {
    return view('front.association');
})->name('association');


Route::get('/xx', function () {
    return view('front.adminsrations');
})->name('adminsrations');



Route::prefix('dashboard')->middleware('guest:admin')->group(function () {

    Route::get('login',[AuthController::class, 'showLogin'])->name('auth.login-show');
    Route::post('login',[AuthController::class, 'login'])->name('auth.login');
});
Route::prefix('dashboard')->middleware('auth:admin') ->group(function () {


    Route::get('/', function () {  return view('dashboard.home');  })->name('dashboard.home');


    Route::resource('publicAssociations',  PublicAssociationController::class);
    Route::resource('teams',  TeamController::class);
    Route::resource('meetings',  MeetingController::class);
    Route::resource('financiallies',  FinanciallyController::class);
    Route::resource('plans',  PlanController::class);
    Route::resource('achievements',  AchievementController::class);
    Route::resource('news',  NewsController::class);
    Route::resource('courses',  CoursesController::class);
    Route::resource('jobs',  JobController::class);
    Route::resource('policies',  PolicyController::class);
    Route::resource('sliders',  SliderController::class);


    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

