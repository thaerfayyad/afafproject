<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\FinanciallyController;
use App\Http\Controllers\Dashboard\MeetingController;
use App\Http\Controllers\Dashboard\PublicAssociationController;
use App\Http\Controllers\Dashboard\TeamController;
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

Route::prefix('dashboard')->group(function() {

    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::get('publicAssociation-create', [PublicAssociationController::class, 'create'])->name('publicAssociation.create');
    Route::post('publicAssociation-store', [PublicAssociationController::class, 'store'])->name('publicAssociation.store');
    Route::get('publicAssociation-index', [PublicAssociationController::class, 'index'])->name('publicAssociation.index');

    Route::resource('teams',  TeamController::class);
    Route::resource('meetings',  MeetingController::class);
    Route::resource('financiallies',  FinanciallyController::class);



});

